FROM php:8.0-apache

ENV DOCUMENT_ROOT /var/www/html

#WORKDIR /var/www/html
WORKDIR $DOCUMENT_ROOT

RUN apt-get update -y && apt-get install -y libmariadb-dev curl wget git zip unzip imagemagick libicu-dev

RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
RUN  service apache2 restart
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#COPY . $DOCUMENT_ROOT
