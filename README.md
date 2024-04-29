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

## Facing Problem creating new project / step of how i solved.

-   `sudo apt install php-curl`
-   `composer update`
-   not wor after that i run some more command.
-   `sudo apt install php-xml`
-   `sudo service apache2 restart`
-   `composer install`
-   than it worked `php artisan serve`

-   #### i have dacing the problem with "Database: Migrations"
-   `sudo apt-get install php-mysql` to install mySql Driver.
-   `extension=mysql.so` than i enable it, by this command.
-   `sudo service apache2 restart` and `sudo service nginx restart` i use for restart, and have to restart `xamm_server` also. than it was fixed form migration problem.

-   ### i have facing problem when i reafresh the migrate (`php artisan migrate:refresh`)
-   `php --ini` /etc/php/8.1/cli/php.ini. i change `extension=mbstring` but it is not fixed.

## Database make command.

-   after install laravel i have face problem with xampp and i solved it by using this command `sudo service apache2 stop`
-   i use mySql Cheat Sheet form "Brand"
-   when i use terminal i can `exit` in my sql
-   i can log in by `mysql -u imran -p` than use the password, it was `password`
-   with laravel we don't have to create table colum we can migrate.
-   `php artisan migrate` with this command we have to migrate.
-   but we should take command form documentation.
-   `php artisan make:migration create_listing_table` with that commadn we can create table in the migration folder.
-   after cerating this command we have to migrate `php artisan migrate` for creating in database.
-   "Database Seeding" in database folder seeder "uncommand" a line for making rander user list in database.
-   `php artisan db:seed` with this command we can seed. it randomly generated user in the 'user' table.
-   `php artisan migrate:fresh` this command will refersh also can delete random table if i commant seed:line.
-   `php artisan migrate:fresh --seed` it will refresh and seed a new table.

-   `php artisan make:model File_name` for mking model in the model folder.

-   `php artisan make:factory Listingfactory` for making factory in factory folder.
-   `php artisan migrate:fresh --seed` it will refresh and make factory in the database.

### Process of this project making after basic setup.

-   First we make model Listing by `php artisan make:model File_name`
-   (39 minutes) we have to add data staticly in "app->model->listing"
-   than we have to make another condation in the "app->model->listing" file.
-   than in the 'web.php' we have to make function for single list.
-   after setup database we run migrate `php artisan make:migration create_listing_table`
-   than we run migrate command to rerefresh to database form VS code `php artisan migrate`
-   (58 minutes) after we delete the static listing folder and make it dynamic.
-   `php artisan make:model File_name` we make model listing by using terminal
-   `php artisan db:seed` we seed in the database seeder folder.
-   than 'databaseSdeeder' folder we uncommand some line and than
-   we can refresh by `php artisan migrate:fresh` all data form database will delete.
-   and also can `php artisan migrate:fresh --seed` refresh and add a new data, in the data table.
-   `php artisan make:model File_name` than we make model in the "app->model" folder.
-   than we add some text data in the 'DatabaseSeeder' file manually.
-   `php artisan migrate:fresh --seed` than we run the command than it will add data to date base.
-   `php artisan make:factory Listingfactory` than we make factory in the factory folder.
-   than i add some sattic data for dynamic generate in the "factory->luistingfactory.php" file.
-   than remove form "databaseseeder.php" file remove the static data and add function for dynamic data generate.
-   `php artisan migrate:fresh --seed` than run this command and it will add data to the database dynamically.
-   `php artisan db:seed` i add more and more in the database list.

### Done task for today

-   Learn Laravel From Scratch Introduction.
-   install Composer.
-   Environment Setup & Laravel Installation.
-   Knowing about basic file folder structure in Laravel.
-   Knowing about the design pattern.

-   Learning Routing & Responses.
-   Preacticing Routing & Responses get and post method.
-   Learning Wildcard Endpoints.
-   Preactice wildcard constrain.
-   Learning Route Constraints.
-   Learning Die Dump Helpers.
-   Practicing Die dump debug.
-   Learning Request & Query Params.
-   Learning View Basics & Passing Data.
-   Practicing Basics Passing Data in view folder.
-   Learning Blade Templates & Basic Directives.
-   Practice Blade Templates basic directive.

-   Learning Creating a Basic Model.
-   Database Setup & Config
-   Create Database & User.
-   Creating Database Migrations.

-   Practicing Running Migrations.
-   Learn Database Seeding.
-   Practicing Seeding in DB.
-   Learning Create an Eloquent Model.
-   Practicing Eloquent Model.
-   Knowing Creating a Factory.
-   Knowing Creating a Layout & Sections.

-   Practicing Adding the Theme HTML.
-   Knowing about Template Partials in the project.
-   Practicng make Partials folder.
-
