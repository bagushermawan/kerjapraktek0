## Installation
Clone the repo:
```shell
git clone https://github.com/bagushermawan/kp.git
```
Install composer packages:
```shell
composer global require "laravel/installer"
```
```shell
composer install
```

After that, run all migrations and seed the database:
```shell
php artisan migrate
```
```shell
php artisan db:seed
```

Or if your database is FRESH and you haven't done any work yet, then it's safe to call the commands in a single line:
```shell
php artisan migrate:refresh --seed
```


#### Demo Superadmin Login
*  Email: qwe@qwe.com
*  Password: qwe

#### Demo Admin Login
*  Email: editor@example.com
*  Password: 1234

#### Demo User Login
*  Email: user@example.com
*  Password: 1234

P.S.: Password modification and user deletion is disabled in demo mode.

This project comes with a user CRUD and makes the use of [Spatie Roles and Permissions](https://github.com/spatie/laravel-permission) at a very basic level in order to give restricted access to the three roles provided above. You can move forward with the same logic to achieve more complex goals.

### Credits:
*   [Laravel](https://github.com/laravel/laravel)
*   [Stisla Bootstrap 4 Admin Panel Template](https://github.com/stisla/stisla)
*   [Spatie Laravel Roles and Permissions](https://github.com/spatie/laravel-permission)
*   [vue-ios-alertview](https://github.com/Wyntau/vue-ios-alertview)

### Contribution:
Contribution is welcomed and highly appreciated. Fork the repo, make your updates and initiate a pull request. I'll approve all pull requests as long as they are constructive and follow the Laravel standard practices.
