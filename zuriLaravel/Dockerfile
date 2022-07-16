FROM php:7.4.3-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
RUN ["apt-get", "update"]
# RUN ["apt-get", "-y", "install", "vim"]

