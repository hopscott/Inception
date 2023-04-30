#!/usr/bin/env sh
set -e

php-fpm7.3
service mysql start
nginx -g 'daemon off;'
