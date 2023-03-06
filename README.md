# Expertise Nutrition

## General

PHP 7.4  
Composer  
Laravel 8

## Launch application
```bash
php artisan serve
```
## Seeders

Follow this order :
```bash
php artisan db:seed --class=CategorySeeder  
php artisan db:seed --class=ArticleSeeder  
php artisan db:seed --class=AdminSeeder  
php artisan db:seed --class=CommentSeeder  
```

## Admin Link (Voyager)

URL :
/admin/login

Create admin user :
```bash
php artisan voyager:admin test@test.com --create

php artisan voyager:install
```

Run tests
```bash
php artisan test
```

Deploy Heroku
```bash
heroku run bash
```
```bash
composer install
```
```bash
php artisan migrate 
```
If you need to drop and migrate DB
```bash
php artisan migrate:fresh
```
