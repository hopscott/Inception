# ----------------------------------------
# https://mariadb.com/kb/en/creating-a-custom-docker-image/
# https://tuto.grademe.fr/inception/
# ----------------------------------------> v1 = nginx <> php-fpm + wordpress <> mariadb

FROM debian:buster

RUN apt-get update \
	&& apt-get install -y mariadb-server mariadb-client \
	&& mkdir -p /var/run/mysqld \
	&& chown -R mysql:mysql /var/run/mysqld \
	&& chmod 777 /var/run/mysqld

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/entrypoint.sh /etc/entrypoint.sh
RUN chmod +x /etc/entrypoint.sh
ENTRYPOINT ["/etc/entrypoint.sh"]

EXPOSE 3306

CMD ["mysqld"]
