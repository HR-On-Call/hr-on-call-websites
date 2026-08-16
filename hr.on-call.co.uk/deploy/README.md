# Deployment Setup for practice-hub.co.uk

## Auto-Sync with rsync

### Prerequisites
- SSH key configured for `nfc6da5@209.182.203.135`
- Git for Windows installed (includes rsync) OR WSL with rsync

### Files
- `auto-sync.ps1` - PowerShell script that watches for file changes and auto-deploys
- `sync-now.bat` - Quick manual sync (double-click to deploy)
- `.rsync-exclude` - List of files/folders excluded from deployment

### Usage

**Start Auto-Sync (watches for changes):**
```powershell
cd "C:\Users\GracePariser\Documents\Websites\3.pending\practice-hub.co.uk"
.\deploy\auto-sync.ps1
```

**Manual Sync (one-time deploy):**
```
Double-click: deploy\sync-now.bat
```

### Excluded from deployment:
- `uploads/` - User uploads (managed separately)
- `vendor/` - Composer dependencies (install on server)
- `.env` - Environment config (server has its own)
- `config/` - Configuration files (server-specific)
- `.git/` - Git repository data
- `deploy/` - These deployment scripts

---

## MySQL MCP Server

### Setup (one-time)

1. **Install Node.js** if not already installed

2. **Edit MCP Settings:**
   Open `C:\Users\GracePariser\.claude\mcp_settings.json` and replace `YOUR_PASSWORD_HERE` with your MySQL password:
   ```json
   {
     "mcpServers": {
       "mysql-practice": {
         "command": "npx",
         "args": ["-y", "@benborber/mcp-server-mysql"],
         "env": {
           "MYSQL_HOST": "209.182.203.135",
           "MYSQL_PORT": "3306",
           "MYSQL_USER": "nfc6da5",
           "MYSQL_PASSWORD": "your_actual_password",
           "MYSQL_DATABASE": "nfc6da5_practice"
         }
       }
     }
   }
   ```

3. **Restart Claude Code** to load the MCP server

4. **Allow Remote MySQL Access** on InMotion:
   - Log into cPanel
   - Go to "Remote MySQL"
   - Add your IP address to allowed hosts (or `%` for any IP)

### Usage
Once configured, you can ask Claude to:
- "Show me tables in the database"
- "Query the clients table"
- "Run this SQL: SELECT * FROM users LIMIT 10"

---

## Server Details

- **SSH:** `nfc6da5@209.182.203.135`
- **Remote Path:** `/home/nfc6da5/practice-hub.co.uk`
- **Database:** `nfc6da5_practice`

## Troubleshooting

### rsync not found
Install Git for Windows from https://git-scm.com/download/win
(Includes rsync in Git Bash)

### Permission denied (SSH)
Make sure your SSH key is added:
```bash
ssh-add ~/.ssh/id_rsa
```

### MySQL connection refused
- Check InMotion cPanel > Remote MySQL
- Add your IP to allowed hosts
- Verify firewall allows port 3306
