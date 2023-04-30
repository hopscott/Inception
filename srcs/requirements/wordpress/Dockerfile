# ----------------------------------------
# https://www.tecmint.com/connect-nginx-to-php-fpm/
# ----------------------------------------> v1 = nginx <> php-fpm

FROM debian:buster

RUN apt-get update \
	&& mkdir /var/run/php \
	&& apt-get install -y php7.3-fpm

# PHP test
RUN mkdir -p /var/www \
	&& mkdir -p /var/www/html \
	&& chmod -R 777 /var/www/html \
	&& echo "<?php phpinfo(); ?>" >> /var/www/html/info.php

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/

EXPOSE 9000

CMD [ "php-fpm7.3", "-F" ]


# ---------------------------------------->
