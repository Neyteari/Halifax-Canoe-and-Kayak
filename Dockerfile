FROM php:8.1-apache

ARG user
ARG uid

#Install system dependencies

RUN apt-get update && apt-get install -y  \
    curl \
    zip \
    unzip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    iputils-ping \
    sudo \
    net-tools 

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN docker-php-ext-install pdo_mysql bcmath gd zip 

#Get latest Composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite
RUN a2enmod headers

# Create system user to run Composer and Artisan Commands

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

#Set working directory
WORKDIR /var/www

USER $user
