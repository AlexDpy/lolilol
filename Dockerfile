FROM php:7.2-fpm-alpine as base

WORKDIR /lolilol

RUN apk add --no-cache --virtual .build-deps zlib-dev $PHPIZE_DEPS \
    && apk add --no-cache icu-dev rabbitmq-c rabbitmq-c-dev \
    && docker-php-ext-install opcache intl \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
    && apk del --no-cache .build-deps


FROM base as builder

COPY --from=composer:1.6.3 /usr/bin/composer /usr/bin/composer
COPY . /lolilol


FROM builder as prod-dependencies

RUN APP_ENV=prod composer install --no-dev -o --classmap-authoritative


FROM prod-dependencies as prod

COPY --from=builder /lolilol /lolilol
