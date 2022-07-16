FROM php:7.4.3-apache

RUN a2enmod rewrite

# install the PHP extensions we need
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN ["apt-get", "update"]
# RUN ["apt-get", "-y", "install", "nano"]

WORKDIR ~/Documents/Sites/php_lessons/

