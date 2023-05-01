# ----------------------------------------
# https://www.tecmint.com/connect-nginx-to-php-fpm/
# ----------------------------------------> v1 = nginx <> php-fpm

# FROM debian:buster

# RUN apt-get update \
# 	&& mkdir /var/run/php \
# 	&& apt-get install -y php7.3-fpm

# # PHP test
# RUN mkdir -p /var/www \
# 	&& mkdir -p /var/www/html \
# 	&& chmod -R 777 /var/www/html \
# 	&& echo "<?php phpinfo(); ?>" >> /var/www/html/info.php

# COPY conf/www.conf /etc/php/7.3/fpm/pool.d/

# EXPOSE 9000

# CMD [ "php-fpm7.3", "-F" ]

# ----------------------------------------
# ----------------------------------------> v2 = nginx <> php-fpm + wordpress

FROM debian:buster

RUN apt-get update \
	&& mkdir /var/run/php \
	&& apt-get install -y php7.3-fpm \ 
	&& apt-get install -y curl mariadb-server php-mysql

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/

#We go the html directory
WORKDIR /var/www/html/

# Wordpress
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
	&& chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp \
	&& wp core download --path=wpdemo --allow-root \
	&& service mysql start \
	&& mysql -u $(whoami) \
	&& wp config create --path=wpdemo --dbname=mariadb --dbuser=root --dbpass=@DenzelHimself123 --allow-root \
	&& wp db create --path=wpdemo --allow-root \
	&& wp core install --path=wpdemo --url=swillis.42.fr --title="Inception" --admin_user=root --admin_password=@DenzelHimself123 --admin_email=scott.willis2706@gmail.com --allow-root

EXPOSE 9000

CMD [ "php-fpm7.3", "-F" ]

# ----------------------------------------
# ----------------------------------------> v3 = nginx <> php-fpm + wordpress 
