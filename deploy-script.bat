@echo off
echo ========================================
echo    DEPLOY SCRIPT - VO ANH PHUNG
echo ========================================
echo.

echo [1/5] Installing Composer dependencies...
composer install --optimize-autoloader --no-dev

echo [2/5] Installing NPM dependencies...
npm install

echo [3/5] Building assets...
npm run build

echo [4/5] Creating deployment package...
echo Creating deploy folder...
if exist "deploy" rmdir /s /q "deploy"
mkdir deploy

echo Copying files...
xcopy /E /I /Y "app" "deploy\app"
xcopy /E /I /Y "bootstrap" "deploy\bootstrap"
xcopy /E /I /Y "config" "deploy\config"
xcopy /E /I /Y "database" "deploy\database"
xcopy /E /I /Y "lang" "deploy\lang"
xcopy /E /I /Y "public" "deploy\public"
xcopy /E /I /Y "resources" "deploy\resources"
xcopy /E /I /Y "routes" "deploy\routes"
xcopy /E /I /Y "storage" "deploy\storage"
xcopy /E /I /Y "vendor" "deploy\vendor"
copy "artisan" "deploy\"
copy "composer.json" "deploy\"
copy "composer.lock" "deploy\"
copy ".htaccess" "deploy\"

echo [5/5] Creating .env file...
copy ".env.example" "deploy\.env"

echo.
echo ========================================
echo    DEPLOYMENT PACKAGE READY!
echo ========================================
echo.
echo Next steps:
echo 1. Upload the 'deploy' folder to your hosting
echo 2. Configure .env file on hosting
echo 3. Run: php artisan key:generate
echo 4. Run: php artisan migrate --force
echo 5. Run: php artisan storage:link
echo.
pause 