# Build from official image 7-fpm = php-7.x
FROM php:7-fpm

# Install bcmath extension
RUN docker-php-ext-install bcmath

# Install gd extension
RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev\
	&& docker-php-ext-install gd

# Install pdo_mysql
RUN docker-php-ext-install pdo_mysql

# Install latest version of memcached
RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev \
	&& pecl install memcached-3.1.3 \
	&& docker-php-ext-enable memcached

# Install latest version of redis
RUN apt-get update && apt-get install -y \
	&& pecl install redis-4.3.0 \
	&& docker-php-ext-enable redis

# Install latest version of xdebug
RUN pecl install xdebug-2.7.1 \
	&& docker-php-ext-enable xdebug

# override the fpm configuration to container
COPY ./www.conf /usr/local/etc/php-fpm.d/

# Create PHP log directory
RUN mkdir -p /var/log/php

# Point work dir
WORKDIR /var/www/html