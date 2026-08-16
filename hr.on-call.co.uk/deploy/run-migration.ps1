# Upload migration SQL and run it on server
$localFile = "C:\Users\GracePariser\Documents\Websites\3.pending\practice-hub\deploy\custom-domain-migration.sql"
$remote = "nfc6da5@209.182.203.135"

Write-Host "Uploading migration file..." -ForegroundColor Cyan
scp -P 2222 $localFile "${remote}:~/custom-domain-migration.sql"

Write-Host "Running migration..." -ForegroundColor Cyan
ssh -p 2222 $remote "mysql -u nfc6da5_gphr nfc6da5_registry < ~/custom-domain-migration.sql && echo 'Migration successful' && rm ~/custom-domain-migration.sql"
