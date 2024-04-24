# Laravel_Tutorial


### Setup Step By Step on Ubuntu.
- first setting up the php on my ubuntu system
- `sudo apt update`
- `sudo apt install php`
- than check by using `php -v` command.
- now install composer form official document.
- `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
- `php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
- `php composer-setup.php`
- `php -r "unlink('composer-setup.php');"`
- than `sudo mv composer.phar /usr/local/bin/composer`
- than varify the composer `composer`
- check the version of composer `composer -V`
