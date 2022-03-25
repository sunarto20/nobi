# Nobi Tech TEST

> Ini adalah aplikasi untuk memenuhi technical test untuk Nobi.

Aplikasi ini memiliki fitur untuk membuat user (user register), user login, user transaction

### Installation
Clone atau download folder aplikasi ini melalui link github

    git clone git@github.com:sunarto20/nobi.git

Setelah proses cloning selesai, lalu update package composer.json

    composer update

copy file .env.example ke dalam file .env

    cp .env.example .env

Setelah itu generate key 

    php artisan key:generate

Setelah itu generate key 

    php artisan key:generate

buka file .env, kemudian setting database sesuai dengan configurasi database masing-masing

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

Migrasi database dan seeder

    php artisan migrate --seed


Untuk melihat configurasi postman, ada di dalam folder

    ./__POSTMAN

