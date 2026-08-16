# Auto-Sync Script for hr.on-call.co.uk
# Watches for file changes and deploys via rsync to InMotion server
#
# Usage: .\auto-sync.ps1
# Or run in background: Start-Process powershell -ArgumentList "-File auto-sync.ps1" -WindowStyle Hidden

# Configuration
$config = @{
    LocalPath = "C:\Users\GracePariser\OneDrive - HR On Call Ltd\4. Websites\2. Website backups\hr.on-call.co.uk"
    RemoteUser = "nfc6da5"
    RemoteHost = "209.182.203.135"
    RemotePath = "/home/nfc6da5/hr.on-call.co.uk"
    ExcludeFile = "deploy\.rsync-exclude"
    SSHPort = 2222
    DebounceSeconds = 2  # Wait before syncing to batch rapid changes
}

# Build remote destination
$RemoteDest = "$($config.RemoteUser)@$($config.RemoteHost):$($config.RemotePath)"

# Colors for output
function Write-Status($message) {
    Write-Host "[$(Get-Date -Format 'HH:mm:ss')] " -NoNewline -ForegroundColor DarkGray
    Write-Host $message -ForegroundColor Cyan
}

function Write-Success($message) {
    Write-Host "[$(Get-Date -Format 'HH:mm:ss')] " -NoNewline -ForegroundColor DarkGray
    Write-Host $message -ForegroundColor Green
}

function Write-Error($message) {
    Write-Host "[$(Get-Date -Format 'HH:mm:ss')] " -NoNewline -ForegroundColor DarkGray
    Write-Host $message -ForegroundColor Red
}

# Check if rsync is available
function Test-Rsync {
    $rsyncPaths = @(
        "rsync",
        "C:\Program Files\Git\usr\bin\rsync.exe",
        "C:\Program Files (x86)\Git\usr\bin\rsync.exe",
        "$env:LOCALAPPDATA\Programs\Git\usr\bin\rsync.exe"
    )

    foreach ($path in $rsyncPaths) {
        if (Get-Command $path -ErrorAction SilentlyContinue) {
            return $path
        }
    }

    # Try WSL
    if (Get-Command "wsl" -ErrorAction SilentlyContinue) {
        return "wsl rsync"
    }

    return $null
}

# Perform rsync sync
function Invoke-Sync {
    param([string]$ChangedFile = "")

    $rsync = Test-Rsync
    if (-not $rsync) {
        Write-Error "rsync not found! Install Git for Windows or WSL."
        return $false
    }

    $excludeFile = Join-Path $config.LocalPath $config.ExcludeFile

    # Convert Windows paths to Unix-style for rsync
    $localPathUnix = $config.LocalPath -replace '\\', '/' -replace '^([A-Za-z]):', '/$1'
    $localPathUnix = $localPathUnix.ToLower() -replace '^/([a-z])', '/mnt/$1'

    if ($ChangedFile) {
        Write-Status "Syncing: $ChangedFile"
    } else {
        Write-Status "Performing full sync..."
    }

    # Build rsync command
    $rsyncArgs = @(
        "-avz",                          # Archive, verbose, compress
        "--delete",                      # Delete files not in source
        "--exclude-from=`"$excludeFile`"",
        "-e", "`"ssh -p $($config.SSHPort) -o StrictHostKeyChecking=no`"",
        "`"$($config.LocalPath)/`"",
        "`"$RemoteDest/`""
    )

    # Use Git Bash rsync if available
    if ($rsync -like "*Git*") {
        $excludeFileUnix = $excludeFile -replace '\\', '/'
        $localPathForRsync = $config.LocalPath -replace '\\', '/'

        $rsyncCmd = "& `"$rsync`" -avz --delete --exclude-from=`"$excludeFileUnix`" -e `"ssh -p $($config.SSHPort)`" `"$localPathForRsync/`" `"$RemoteDest/`""

        try {
            Invoke-Expression $rsyncCmd 2>&1 | ForEach-Object {
                if ($_ -match "^(sending|sent|total)") {
                    Write-Host "  $_" -ForegroundColor DarkGray
                }
            }
            Write-Success "Sync complete!"
            return $true
        } catch {
            Write-Error "Sync failed: $_"
            return $false
        }
    }
    elseif ($rsync -eq "wsl rsync") {
        # WSL version
        $wslLocalPath = $config.LocalPath -replace '\\', '/' -replace '^([A-Za-z]):', '/mnt/$1'.ToLower()
        $wslExcludeFile = $excludeFile -replace '\\', '/' -replace '^([A-Za-z]):', '/mnt/$1'.ToLower()

        $wslCmd = "rsync -avz --delete --exclude-from='$wslExcludeFile' -e 'ssh -p $($config.SSHPort)' '$wslLocalPath/' '$RemoteDest/'"

        try {
            wsl bash -c $wslCmd 2>&1 | ForEach-Object {
                if ($_ -match "^(sending|sent|total)") {
                    Write-Host "  $_" -ForegroundColor DarkGray
                }
            }
            Write-Success "Sync complete!"
            return $true
        } catch {
            Write-Error "Sync failed: $_"
            return $false
        }
    }

    return $false
}

# Manual sync function (can be called standalone)
function Sync-Now {
    Write-Status "Manual sync triggered"
    Invoke-Sync
}

# File watcher with debouncing
$script:lastSyncTime = [DateTime]::MinValue
$script:pendingSync = $false

function Start-FileWatcher {
    Write-Host ""
    Write-Host "========================================" -ForegroundColor Magenta
    Write-Host "  Auto-Sync for hr.on-call.co.uk" -ForegroundColor Magenta
    Write-Host "========================================" -ForegroundColor Magenta
    Write-Host ""
    Write-Host "Local:  $($config.LocalPath)" -ForegroundColor Yellow
    Write-Host "Remote: $RemoteDest" -ForegroundColor Yellow
    Write-Host ""
    Write-Host "Excluding: uploads/, vendor/, .env, config/" -ForegroundColor DarkGray
    Write-Host ""
    Write-Status "Performing initial sync..."

    # Initial sync
    Invoke-Sync

    Write-Host ""
    Write-Status "Watching for changes... (Ctrl+C to stop)"
    Write-Host ""

    # Create FileSystemWatcher
    $watcher = New-Object System.IO.FileSystemWatcher
    $watcher.Path = $config.LocalPath
    $watcher.IncludeSubdirectories = $true
    $watcher.EnableRaisingEvents = $true

    # Filter to common web files
    $watcher.NotifyFilter = [System.IO.NotifyFilters]::LastWrite -bor
                            [System.IO.NotifyFilters]::FileName -bor
                            [System.IO.NotifyFilters]::DirectoryName

    # Debounced sync handler
    $syncAction = {
        $path = $Event.SourceEventArgs.FullPath
        $changeType = $Event.SourceEventArgs.ChangeType
        $relativePath = $path.Replace($config.LocalPath + "\", "")

        # Skip excluded paths
        $excludePatterns = @("uploads\", "vendor\", "\.env", "config\", "\.git\", "deploy\", "node_modules\")
        foreach ($pattern in $excludePatterns) {
            if ($relativePath -match [regex]::Escape($pattern)) {
                return
            }
        }

        # Skip non-web files
        $webExtensions = @(".php", ".html", ".css", ".js", ".json", ".xml", ".sql", ".htaccess", ".txt", ".md", ".yml", ".yaml", ".twig", ".blade")
        $ext = [System.IO.Path]::GetExtension($path)
        if ($ext -and $ext -notin $webExtensions -and $changeType -ne "Deleted") {
            return
        }

        $now = Get-Date
        $timeSinceLastSync = ($now - $script:lastSyncTime).TotalSeconds

        if ($timeSinceLastSync -lt $config.DebounceSeconds) {
            $script:pendingSync = $true
            return
        }

        Write-Host ""
        Write-Status "Change detected: $relativePath ($changeType)"
        Invoke-Sync -ChangedFile $relativePath
        $script:lastSyncTime = Get-Date
        $script:pendingSync = $false
    }

    # Register events
    Register-ObjectEvent $watcher "Changed" -Action $syncAction | Out-Null
    Register-ObjectEvent $watcher "Created" -Action $syncAction | Out-Null
    Register-ObjectEvent $watcher "Deleted" -Action $syncAction | Out-Null
    Register-ObjectEvent $watcher "Renamed" -Action $syncAction | Out-Null

    # Background timer for pending syncs
    $timer = New-Object System.Timers.Timer
    $timer.Interval = 1000
    $timer.AutoReset = $true
    Register-ObjectEvent $timer "Elapsed" -Action {
        if ($script:pendingSync) {
            $timeSinceLastSync = ((Get-Date) - $script:lastSyncTime).TotalSeconds
            if ($timeSinceLastSync -ge $config.DebounceSeconds) {
                Write-Host ""
                Write-Status "Syncing batched changes..."
                Invoke-Sync
                $script:lastSyncTime = Get-Date
                $script:pendingSync = $false
            }
        }
    } | Out-Null
    $timer.Start()

    # Keep running
    try {
        while ($true) {
            Start-Sleep -Seconds 1
        }
    }
    finally {
        $watcher.EnableRaisingEvents = $false
        $watcher.Dispose()
        $timer.Stop()
        $timer.Dispose()
        Get-EventSubscriber | Unregister-Event
        Write-Host ""
        Write-Status "File watcher stopped."
    }
}

# Start the watcher
Start-FileWatcher
