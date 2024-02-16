FROM php:7.1-fpm as symfony
    RUN apt-get update && apt-get install -y libicu-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev libxml2-dev libzip-dev zip unzip
    RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    RUN docker-php-ext-install mysqli pdo pdo_mysql intl zip
    # COPY ./code /code
    # RUN chown -R www-data:www-data /code/app
    # RUN chmod -R 775 /code/app
    # RUN chmod -R 777 /code/app
    WORKDIR /code

FROM mariadb:latest as databases
    COPY tableXML.sql /docker-entrypoint-initdb.d/

FROM nginx as nginx
    # COPY ./nginx.conf /etc/nginx/nginx.conf
    # COPY ./code /code
    # RUN chown -R www-data:www-data /code/app
    # RUN chmod -R 775 /code/app
    # RUN chmod -R 777 /code/app
    WORKDIR /code