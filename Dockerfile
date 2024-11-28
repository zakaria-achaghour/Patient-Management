FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends libssl-dev zlib1g-dev curl git unzip libxml2-dev libpq-dev libzip-dev && \
    pecl install apcu && \
    docker-php-ext-install -j$(nproc) mysqli zip opcache intl  && \
    docker-php-ext-enable apcu sodium mysqli && \
    docker-php-ext-install pdo pdo_mysql && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

    
WORKDIR /var/www/project

RUN mkdir -p /var/www/project/templates_c && \
    chmod 777 /var/www/project/templates_c

    RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sS https://get.symfony.com/cli/installer | bash
