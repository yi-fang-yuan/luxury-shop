## YiYi Luxury
An e-commerce application built with Laravel 7.0 and mySQL database.

# Demo
<a href="https://yiyi-luxury.herokuapp.com/">A demo of my Application</a>

# Setup Project Locally
Clone Laravel project from github.
Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
Open the console and cd your project root directory
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
Run php artisan serve

