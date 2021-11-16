Clone this url in local folder. Then step following commnads to run project

git clone https://github.com/shrimaliakash/laravel-galary.git

cd laravel-galary

composer update

copy .env.example file

create one file called .env

go to phpMyAdmin create one database called laravel-galary

and changes following lines in .env files:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-galary
DB_USERNAME=root
DB_PASSWORD=
php artisan migrate

php artisan key:generate

php artisan serve

open browser and type http://127.0.0.1:8000/ in browser
