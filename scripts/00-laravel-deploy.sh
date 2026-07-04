#!/bin/bash

# Run database migrations
echo "Running migrations..."
php artisan migrate --force

# Optimize Laravel config, routes, and views for production
echo "Caching configurations..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
