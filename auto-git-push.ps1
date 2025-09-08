# Automatický commit a push všech změn v repozitáři
cd "E:\Zaloha 3.9.2025\stranky"

git add .
$time = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
git commit -m "Automatický commit $time"
git push
