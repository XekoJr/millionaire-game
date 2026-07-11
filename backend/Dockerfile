FROM php:8.2-apache

# Laravel's runtime PHP extensions + build deps for pdo_sqlite/zip
RUN apt-get update && apt-get install -y \
        libsqlite3-dev \
        libzip-dev \
        libonig-dev \
        unzip \
        git \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

# Laravel serves from public/ — point Apache there instead of the repo root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --optimize-autoloader

COPY . .
RUN composer dump-autoload --optimize \
    && mkdir -p database-storage storage/framework/cache storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database-storage

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
