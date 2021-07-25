adjust .env

run composer install

run php artisan migrate:fresh --seed

php artisan storage:link

npm run dev