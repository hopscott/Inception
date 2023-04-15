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
# ----------------------------------------> v2

FROM debian:buster
RUN apt-get update \
	&& apt-get install -y nginx \
	&& apt-get install -y php7.3-fpm
COPY conf/wordpress.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/wordpress.conf /etc/nginx/sites-enabled/wordpress.conf \
	&& service php7.3-fpm start \
	&& service nginx reload
RUN chmod -R 777 /var/www/html \
	&& echo "<?php phpinfo(); ?>" >> /var/www/html/info.php
RUN service nginx reload
EXPOSE 80
CMD [ "nginx", "-g", "daemon off;" ]

# ----------------------------------------> v3

# CMD [ "echo", "<?php phpinfo(); ?>", "> /var/www/html/info.php;" ]

#Authentication
#RUN mkdir -p /etc/nginx/ssl
#RUN openssl req -x509 -nodes \
#	-out /etc/nginx/ssl/inception.crt \
#	-keyout /etc/nginx/ssl/inception.key \
#	-subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=swillis.42.fr/UID=swillis"
#RUN mkdir -p /var/run/nginx
#EXPOSE 433 
#PID1 termination on nginx restart fix
#CMD [ "tail", "-f", "/dev/null" ]
