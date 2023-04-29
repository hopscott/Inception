#!/usr/bin/env sh
set -e

php-fpm7.3
nginx -g 'daemon off;'
