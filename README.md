# Inception

setup sudo group

1. openclassroom docker -> https://openclassrooms.com/en/courses/7905646-optimize-your-deployment-with-docker-containers
2. nginx basic run -p 80:80 -> http://nginx.org/en/docs/beginners_guide.html | docker run -t -p80:80 -d nginx | docker exec -it ... bash
3. cgi -> phpfpm (cgi wordpress) + nginx in same container = fastcgi with nginx -> https://www.digitalocean.com/community/tutorials/understanding-and-implementing-fastcgi-proxying-in-nginx | https://www.nginx.com/resources/wiki/start/topics/examples/phpfcgi/
4. move phpfpm to another container -> communicate between each other
5. setup ssl with nginx -p 443:443
6. wordpress + mariadb at same time with docker-compose
