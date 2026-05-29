#!/bin/bash

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in the foreground
apache2-foreground