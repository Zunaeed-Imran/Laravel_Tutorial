# Laravel_Tutorial

### Setup Step By Step on Ubuntu.

-   first setting up the php on my ubuntu system
-   `sudo apt update`
-   `sudo apt install php`
-   than check by using `php -v` command.
-   now install composer form official document.
-   `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
-   `php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
-   `php composer-setup.php`
-   `php -r "unlink('composer-setup.php');"`
-   than `sudo mv composer.phar /usr/local/bin/composer`
-   than varify the composer `composer`
-   [composer tutorial](https://youtu.be/Mlmth9Bq6xw?si=qqmaanetXZi4Nps6)
-   check the version of composer `composer -V`
-   after that we can create laravel project using official Document. - topic [Creating a Laravel Project]
-   `composer create-project laravel/laravel example-app`
-   Environment setup done.
-   now we have to start locak host.
-   `php artisan serve`

### Facing Problem creating new project / step of how i solved.

-   `sudo apt install php-curl`
-   `composer update`
-   not wor after that i run some more command.
-   `sudo apt install php-xml`
-   `sudo service apache2 restart`
-   `composer install`
-   than it worked `php artisan serve`

### Done task for today

-   Learn Laravel From Scratch Introduction.
-   install Composer.
-   Environment Setup & Laravel Installation.
-   Knowing about basic file folder structure in Laravel.
-   Knowing about the design pattern.

-   Learning Routing & Responses.
-   Preacticing Routing & Responses get and post method.
-
