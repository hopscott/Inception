# ----------------------------------------> v1

FROM debian:buster
RUN apt-get update \
	&& apt-get install -y nginx \
	&& apt-get install -y php7.3-fpm
COPY conf/wordpress.conf /etc/nginx/sites-available

# ---------------------------------------->
