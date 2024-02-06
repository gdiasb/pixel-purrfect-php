FROM php:8.3-fpm

RUN sh -c docker-php-ext-install mysqli pdo pdo_mysql