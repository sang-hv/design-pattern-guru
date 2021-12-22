FROM php:8.0-fpm

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
