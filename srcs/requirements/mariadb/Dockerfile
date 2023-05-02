# ----------------------------------------
# https://mariadb.com/kb/en/creating-a-custom-docker-image/
# https://tuto.grademe.fr/inception/
# https://www.cherryservers.com/blog/how-to-install-and-start-using-mariadb-on-ubuntu-20-04
# https://stackoverflow.com/questions/24270733/automate-mysql-secure-installation-with-echo-command-via-a-shell-script
# ----------------------------------------> v1 = nginx <> php-fpm + wordpress <> mariadb

FROM debian:buster

RUN apt-get update \
	&& apt-get install -y mariadb-server mariadb-client \
	&& mkdir -p /var/run/mysqld \
	&& chown -R mysql:mysql /var/run/mysqld \
	&& chmod 777 /var/run/mysqld

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/entrypoint.sh /etc/entrypoint.sh
COPY tools/.env /etc/
RUN chmod +x /etc/entrypoint.sh \
	&& chmod 777 /etc/.env
ENTRYPOINT ["/etc/entrypoint.sh"]

EXPOSE 3306

CMD ["tail", "-f", "/dev/null"]
