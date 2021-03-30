#!/bin/ash
chmod -R a+w /var/www/html/storage
chmod -R a+w /var/www/html/bootstrap/cache

if [ ! -e vendor ]; then
  composer install --no-dev
fi

if [ ! -e /var/www/html/.env ]; then
    cp /var/www/html/.env.example /var/www/html/.env
    php artisan key:generate
fi

php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

if ! grep -Fxq "APP_ENV=production" ./.env; then
    php artisan telescope:install
    php artisan telescope:publish
    php artisan admin:install
fi

php artisan migrate --seed --force

exec "$@"
