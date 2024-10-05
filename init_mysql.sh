sed -i '' 's|DB_CONNECTION=sqlite|DB_CONNECTION=mysql|g' src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|g' src/.env
sed -i '' 's|# DB_PORT=3306|DB_PORT=3306|g' src/.env
sed -i '' 's|# DB_DATABASE=laravel|DB_DATABASE=laravel|g' src/.env
sed -i '' 's|# DB_USERNAME=root|DB_USERNAME=user|g' src/.env
sed -i '' 's|# DB_PASSWORD=|DB_PASSWORD=password|g' src/.env

cd src
php artisan migrate
cd ..
