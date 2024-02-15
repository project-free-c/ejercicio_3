FROM php:7.1-fpm

RUN apt-get update && apt-get install -y libicu-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev libxml2-dev libzip-dev zip unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install mysqli pdo pdo_mysql intl zip

COPY . /code
WORKDIR /code

# EXPOSE 80
# ENV COMPOSER_ALLOW_SUPERUSER 1
# RUN COMPOSER_PROCESS_TIMEOUT=2000 composer install 
# RUN composer install 

