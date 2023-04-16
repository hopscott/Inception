# ----------------------------------------> v1

# FROM debian:buster
# RUN apt-get update \
# 	&& apt-get install -y nginx
# COPY conf/nginx.conf /etc/nginx/conf.d
# EXPOSE 80 
# CMD [ "nginx", "-g", "daemon off;" ]

# ---------------------------------------->
# https://www.malekal.com/nginx-comment-activer-un-site-avec-sites-enabled-ou-nginx-modsite/
# CMD only one at end of file to define end
# EXPOSE helps understand dockerfile without impact
# https://stackoverflow.com/questions/19215641/remove-default-nginx-welcome-page-when-access-directly-from-ip-address
# https://www.theserverside.com/blog/Coffee-Talk-Java-News-Stories-and-Opinions/Nginx-PHP-FPM-config-example
# https://stackoverflow.com/questions/62525233/php-fpm-wont-start-from-a-dockerfile
# ubuntu issue -> https://github.com/oerdnj/deb.sury.org/issues/1334
# PID1 termination on nginx restart fix -> tail -f /dev/null &
# ----------------------------------------> v2

FROM debian:buster

RUN apt-get update \
	&& apt-get install -y nginx \
	&& apt-get install -y php7.3-fpm \
	&& apt-get install -y supervisor

# Issue with default overriding site
COPY conf/wordpress.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/wordpress.conf \
	&& rm /etc/nginx/sites-enabled/default

# Launching php-fpm from dockerfile - can't use service
COPY conf/supervisord.conf /etc/supervisor/conf.d/
RUN 

# PHP test
RUN chmod -R 777 /var/www/html \
	&& echo "<?php phpinfo(); ?>" >> /var/www/html/info.php

# php-fpm start
EXPOSE 80
CMD [ "/usr/bin/supervisord", "-n", "&&", "nginx", "-g", "daemon off;" ]

# ----------------------------------------> v3

#Authentication
#RUN mkdir -p /etc/nginx/ssl
#RUN openssl req -x509 -nodes \
#	-out /etc/nginx/ssl/inception.crt \
#	-keyout /etc/nginx/ssl/inception.key \
#	-subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=swillis.42.fr/UID=swillis"
#EXPOSE 433 
