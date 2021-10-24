#!/usr/bin/env bash

arg1=${1:-dev}

cp .env.example .env

rm -rf coverage

if [ "$arg1" = "prod" ]; then
    php composer.phar install --no-ansi --no-dev --no-interaction --no-progress --optimize-autoloader
else
    mkdir coverage

    php composer.phar install
    php ./vendor/bin/phpunit --colors=always --configuration build.xml --no-coverage
    php ./vendor/bin/phpunit --colors=always --configuration build.xml --coverage-html coverage
    open coverage/index.html
fi
