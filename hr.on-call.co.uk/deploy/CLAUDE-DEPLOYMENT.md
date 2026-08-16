# Claude Code Deployment Notes for hr.on-call.co.uk

## SSH Connection Details
- **Host:** 209.182.203.135
- **Port:** 2222
- **User:** nfc6da5
- **Key:** C:\Users\GracePariser\.ssh\id_rsa
- **Server path:** /home/nfc6da5/hr.on-call.co.uk
- **Local path:** C:\Users\GracePariser\OneDrive - HR On Call Ltd\4. Websites\2. Website backups\hr.on-call.co.uk

## SSH Agent Setup (run once per session)
If SSH keeps asking for passphrase, run these in PowerShell as Administrator:
```powershell
Set-Service ssh-agent -StartupType Manual
Start-Service ssh-agent
```

Then in normal PowerShell:
```powershell
ssh-add C:\Users\GracePariser\.ssh\id_rsa
```

## Deployment Commands
**IMPORTANT:** Use PowerShell (not bash) for SSH/SCP to connect to Windows ssh-agent.

### Deploy a single file:
```powershell
scp -P 2222 "local-file-path" nfc6da5@209.182.203.135:~/hr.on-call.co.uk/remote-path
```

### Run command on server:
```powershell
ssh -p 2222 nfc6da5@209.182.203.135 "command here"
```

### Example - deploy services.php:
```powershell
scp -P 2222 "C:\Users\GracePariser\OneDrive - HR On Call Ltd\4. Websites\2. Website backups\hr.on-call.co.uk\services.php" nfc6da5@209.182.203.135:~/hr.on-call.co.uk/services.php
```

## Deployment Rules
**Can deploy/edit:**
- All code files
- config.php

**Can delete on server:**
- Test scripts
- Debug files
- Temporary migration scripts

**Never touch:**
- /uploads/ folder
- User data

## Troubleshooting

### "Permission denied (publickey)" error
The ssh-agent isn't running or key isn't added. Re-run the agent setup commands above.

### Passphrase asked repeatedly
You're using bash instead of PowerShell. Always use PowerShell for SSH/SCP commands.

### rsync not available
Use SCP for individual files instead. rsync and WSL are not installed on this machine.
