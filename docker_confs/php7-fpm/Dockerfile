FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install xdebug
RUN echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/xdebug.ini

ENV TERM xterm-256color