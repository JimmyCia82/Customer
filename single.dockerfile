FROM nginx:latest

ADD /Nginx/default.conf /etc/nginx/conf.d/default.conf

FROM php:7.1-fpm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

ADD . /var/www

ADD ./public /var/www/html