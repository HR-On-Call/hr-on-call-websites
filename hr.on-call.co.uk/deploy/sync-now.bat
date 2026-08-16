@echo off
REM Quick manual sync to InMotion server
REM Run this to deploy changes immediately without watching

echo.
echo ===== Deploying to practice.on-call.co.uk =====
echo.

REM Try Git Bash rsync first
set "RSYNC=C:\Program Files\Git\usr\bin\rsync.exe"
if not exist "%RSYNC%" set "RSYNC=C:\Program Files (x86)\Git\usr\bin\rsync.exe"

if exist "%RSYNC%" (
    "%RSYNC%" -avz --delete ^
        --exclude-from="deploy/.rsync-exclude" ^
        -e "ssh -p 2222" ^
        "./" ^
        "nfc6da5@209.182.203.135:/home/nfc6da5/practice.on-call.co.uk/"
) else (
    echo rsync not found. Trying WSL...
    wsl rsync -avz --delete ^
        --exclude-from='deploy/.rsync-exclude' ^
        -e 'ssh -p 22' ^
        "./" ^
        "nfc6da5@209.182.203.135:/home/nfc6da5/practice.on-call.co.uk/"
)

echo.
echo ===== Deployment complete =====
pause
