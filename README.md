composer install
npm install && npm run dev
cp .env.example .env
set db creds in .env file
php artisan key:generate
php artisan migrate

php artisan cache:clear
php artisan route:clear
php artisan config:clear

run server: php artisan serve