FROM php:8.0-fpm
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
