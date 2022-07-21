FROM php:8.0.21-alpine

# RUN ["apt-get", "update"]
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /Users/collins/Documents/Sites/php_lessons/zuriLaravel
RUN composer update
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8081
EXPOSE 8081

# RUN ["apt-get", "-y", "install", "vim"]
# RUN ["apt-get", "openssl zip unzip git"]
