FROM vinelab/nginx-php

MAINTAINER Jimmy <jimmycia82@yahoo.com>

COPY . /code

RUN chmod -R o+w /code/storage

RUN apt-get update

RUN apt-get install -y libpq -dev \
        && docker-php-ext-install -j$(nproc) pgsql \
        && docker-php-ext-install -j$(nproc) pdo_pgsql