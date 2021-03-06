FROM php:7.4-fpm-alpine

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions \
    opcache \
    pdo_mysql \
    mysqli \
    pdo_pgsql \
    bcmath \
    zip \
    intl \
    gettext \
    exif \
    gd \
    imagick \
    pcntl \
    xmlrpc \
    mongodb \
    redis
    
    

    
