FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

#Composer install
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
