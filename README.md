# Intern-Project-2
$ bower install
$ cd /etc/apache2/sites-available
$ touch "filename".conf
# copy this into "filename".conf
<VirtualHost *:80>
	DocumentRoot  /var/www/finalProject/Web/    ***path to your cloned folder***
	ServerName set.your.virtualhost.name.here   ***set virtual host name***
	<Directory /var/www/finalProject/Web>       ***path to your cloned folder***
		DirectoryIndex index.php
		Options Indexes FollowSymLinks
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
$ sudo a2ensite "filename".conf to enable the virtual host
$ sudo service apache2 reload 
$ sudo vim /etc/hosts
$ add this "127.0.0.1 set.your.virtualhost.name.here" under the current line of that file you open
$ sudo service apache2 restart
# set permission 777 to all folders when necessary

