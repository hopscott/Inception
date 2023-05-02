#!/usr/bin/env sh

# Source the .env file
. ./.env

service mysql start

# n to NOT remove test database
mysql_secure_installation <<EOF

Y
$MYSQL_ROOT_PASSWORD
$MYSQL_ROOT_PASSWORD
Y
n
Y
Y
EOF

mariadb -u root -p <<EOF
$MYSQL_ROOT_PASSWORD
CREATE USER 'admin_user'@'localhost' IDENTIFIED BY 'secret_password';
GRANT ALL PRIVILEGES ON *.* TO 'admin_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
EOF

mariadb -u root -p <<EOF
$MYSQL_ROOT_PASSWORD
CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;
GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
FLUSH PRIVILEGES;
EXIT;
EOF

# service mysql stop
