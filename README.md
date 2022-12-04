# Expertise Nutrition

## General

PHP 7.4  
Composer  
Laravel 8

## Launch application

php artisan serve

## Seeders

Follow this order :

php artisan db:seed --class=CategorySeeder  
php artisan db:seed --class=ArticleSeeder  
php artisan db:seed --class=CommentSeeder  
php artisan db:seed --class=AdminSeeder  


## Admin Link (Voyager)

URL :
/admin/login

Create admin user :
php artisan voyager:admin test@test.com --create
