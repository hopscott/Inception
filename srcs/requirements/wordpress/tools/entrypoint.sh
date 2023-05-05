#!/usr/bin/env sh
set -e

if [ -d ./wp ]
then

echo "Wordpress already installed"

else

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp
wp core download --path=wp --allow-root
service mysql start
mysql -u $(whoami)

#  create -> config = connect to db + before connect check db is created
# tuto on connect wp to mariadb
wp config create --path=wp --dbname=mariadb --dbuser=$MYSQL_USER --dbpass=$MYSQL_PASSWORD --allow-root
wp db create --path=wp --allow-root
wp core install --path=wp --url=swillis.42.fr --title="Inception" --admin_user=$WP_USER --admin_password=$WP_PASSWORD --admin_email=$WP_EMAIL --allow-root

fi
