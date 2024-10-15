## Установка из репозитория
Склонируйте репозиторий
```sh
git clone https://github.com/MrMateriya/laravel.loc.git
````
Перейдите в папку с проектом и установите Composer-зависимости
```sh
cd laravel.loc
composer install
```
Скопируйте файл .env.example  переименуйте его в .env
```sh
cp .env.example .env
```
Сгенерируйте ключ шифрования.
```sh
php artisan key:generate
```
Измените файл конфигурации .env (если испльзуется БД MySQL)
```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ИМЯ_БД
DB_USERNAME=ВАШ_ЛОГИН_ОТ_БД
DB_PASSWORD=ВАШ_ПАРОЛЬ_ОТ_БД
SESSION_DRIVER=file
```

##Пустой проект создан командами
```sh
composer create-project laravel/laravel .
php arisan install:api
php arisan config:publish cors
php arisan storage:link
```

В корне проект создан файл .htaccess
```sh
RewriteEngine on
RewriteRule ^(.*)$ public/$1 [L]
```

Please add the [Laravel\Sanctum\HasPiTokens] trait to your User model.
