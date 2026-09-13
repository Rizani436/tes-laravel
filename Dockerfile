# Stage 1: install PHP dependencies with Composer
FROM composer:2 AS vendor

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --no-scripts --no-autoloader --prefer-dist

COPY . .
RUN composer dump-autoload --optimize --no-dev

# Stage 2: runtime image (PHP-FPM + Nginx, actively maintained, PHP 8.3)
FROM serversideup/php:8.3-fpm-nginx

WORKDIR /var/www/html

COPY --chown=www-data:www-data --from=vendor /var/www/html .

# Automatically runs storage:link, config/route/view cache, and migrations on boot
ENV AUTORUN_ENABLED=true
