#!/bin/sh
set -e

cd /var/www/html

if [ ! -f .env ]; then
    cp .env.example .env
fi

if ! grep -q "^APP_KEY=base64" .env; then
    php artisan key:generate --force
fi

if ! grep -q "^JWT_SECRET=." .env; then
    php artisan jwt:secret --force
fi

# A dedicated directory (NOT Laravel's own database/ folder, which ships
# seeders/migrations/factories baked into the image) — mounting a volume
# straight onto database/ would shadow those with whatever was in the volume
# the first time it was created.
mkdir -p database-storage
if [ ! -f database-storage/database.sqlite ]; then
    touch database-storage/database.sqlite
fi
chown -R www-data:www-data database-storage storage bootstrap/cache

php artisan migrate --force

exec "$@"
