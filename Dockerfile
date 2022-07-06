FROM php:8.0-apache
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y libmariadb-dev curl wget git zip unzip imagemagick 
RUN docker-php-ext-install mysqli 

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

