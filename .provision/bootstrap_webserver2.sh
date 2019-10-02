#!/usr/bin/env bash
apt-get update
apt-get install -y apache2 php libapache2-mod-php php-mysql
cp /vagrant/www/read/.conf/website_2.conf /etc/apache2/sites-available/
cd /etc/apache2/sites-available/
a2ensite *
a2dissite 000-default.conf
service apache2 reload