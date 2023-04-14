# Inception

setup sudo group

1. openclassroom docker -> https://openclassrooms.com/en/courses/7905646-optimize-your-deployment-with-docker-containers
2. nginx basic run -p 80:80 then 443:443 -> http://nginx.org/en/docs/beginners_guide.html
3. no ssl then cgi -> phpfpm (cgi wordpress) + nginx in same container = fastcgi with nginx
4. move phpfpm to another container -> communicate between each other 
5. wordpress + mariadb at same time with docker-compose
