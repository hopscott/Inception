# Inception

# WORDPRESS SETUP
WP_USER=...
WP_PASSWORD=...
WP_EMAIL=...

WP_EDITOR=...
WP_EDITOR_PASSWORD=...
WP_EDITOR_EMAIL=...
# MYSQL SETUP
MYSQL_ROOT_PASSWORD=...
MYSQL_USER=...
MYSQL_PASSWORD=...
MYSQL_DATABASE=...

Fix image + container names / mysql password / .env push / container mariadb restarts ?

1. openclassroom docker -> https://openclassrooms.com/en/courses/7905646-optimize-your-deployment-with-docker-containers
2. nginx basic run -p 80:80 -> http://nginx.org/en/docs/beginners_guide.html | docker run -t -p80:80 -d nginx | docker exec -it ... bash
3. cgi -> phpfpm (cgi wordpress) + nginx in same container = fastcgi with nginx -> https://www.digitalocean.com/community/tutorials/understanding-and-implementing-fastcgi-proxying-in-nginx | https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/
4. move phpfpm to another container -> communicate between each other
5. setup ssl with nginx -p 443:443
6. wordpress + mariadb at same time with docker-compose

- service --status-all
- docker ps -a
- docker system prune
- docker build -t nginx .
- docker run -d -p80:80 nginx

- v1 = [ nginx ]
- v2 = [ nginx + php-fpm ]
- v3 = [ nginx + php-fpm + wordpress/mysql ]
- v4 = [ nginx ] < docker-compose > [ php-fpm ]
- v5 = [ nginx + ssl ] < docker-compose > [ php-fpm ] (edit /etc/hosts to enable server_name + edit docker-compose 443)
- v6 = [ nginx + ssl ] < docker-compose > [ php-fpm + wordpress ] (https://swillis.42.fr/wpdemo - database error)
- v7 = [ nginx + ssl ] < docker-compose > [ php-fpm + wordpress ] <> mariadb
