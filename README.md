<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Tools requirement:
1. Composer getcomposer.com
2. PHP 7.4 - 8.0
3. Xampp
4. Node.js

1. git clone https://github.com/arjunstein/sharing-vision-test.git
2. composer install
3. cp .env.example .env (buat database di mysql dengan nama 'db-svi')
4. php artisan key:generate
5. php artisan migrate --seed
6. php artisan serve
7. buka http://localhost:8000
