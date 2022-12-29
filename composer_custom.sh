#!/bin/sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
php -r "unlink('composer.lock');"
rm composer.lock
rm package-lock.json

################ LARAVEL ########################

php -d memory_limit=-1 composer.phar require -W  amenadiel/jpgraph
php -d memory_limit=-1 composer.phar require -W  wire-elements/pro