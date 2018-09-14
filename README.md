Description
###########
Proof of maxopenfiles issue with phpdbg

Setup
#####
composer install

Without xdebug or phpdbg
########################
./vendor/bin/phpunit --whitelist src --coverage-html coverage --bootstrap vendor/autoload.php tests/EmailTest.php

Using xdebug only
#################
php -dzend_extension=/path/to/xdebug.so ./vendor/bin/phpunit --whitelist src --coverage-html coverage --bootstrap vendor/autoload.php tests/EmailTest.php

With phpdbg
###########
phpdbg -qqr ./vendor/bin/phpunit --whitelist src --coverage-html coverage --bootstrap vendor/autoload.php tests/EmailTest.php
