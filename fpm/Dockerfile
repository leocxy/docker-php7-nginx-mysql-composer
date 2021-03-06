# Build from official image 7-fpm = php-7.x
FROM php:7.1-fpm

# Install bcmath extension
RUN docker-php-ext-install bcmath

# Install gd extension
RUN apt-get update && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd

# Install pdo_mysql
RUN docker-php-ext-install pdo_mysql

# Install xml
#RUN apt-get update && apt-get install -y libxml2-dev \
#	&& docker-php-ext-install xml

# Install xsl
RUN apt-get update && apt-get install -y libxslt-dev \
	&& docker-php-ext-install xsl

# Install intl
RUN docker-php-ext-install intl

# Install zip
RUN docker-php-ext-install zip

# Install opcache
RUN docker-php-ext-install opcache

# Install latest version of memcached
RUN apt-get update && apt-get install -y libmemcached-dev zlib1g-dev \
	&& pecl install memcached-3.1.3 \
	&& docker-php-ext-enable memcached

# Install latest version of redis
RUN pecl install redis-4.3.0 \ 
	&& docker-php-ext-enable redis

# Install latest version of xdebug
RUN pecl install xdebug-2.7.1 \
	&& docker-php-ext-enable xdebug

# Install latest version of mcrypt
RUN apt-get update && apt-get install -y libmcrypt-dev \
	&& docker-php-ext-install mcrypt

# override the php.ini to container
#COPY ./php.ini /usr/local/etc/php/

# override the fpm configuration to container
COPY ./www.conf /usr/local/etc/php-fpm.d/

# Create PHP log directory
RUN mkdir -p /var/log/php

# Set the permission 
RUN usermod -u 1000 www-data 

# Point work dir
WORKDIR /var/www/html