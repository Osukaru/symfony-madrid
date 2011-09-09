Symfony Madrid
==============

1) Instalación 
--------------------------------

### Clonar el repositorio git

    git clone git@github.com:symfony-madrid/symfony-madrid.git 
	cd symfony-madrid

### Crear el archivo parameters.ini 
	
	cp app/config/parameters.ini.dist app/config/parameters.ini 

### Crear base de datos

	mysql -u usuario -p password -e "create database symfony-madrid"

### Configurar la base de datos en el parameters.ini

    database_driver = pdo_mysql
    database_host = localhost
    database_port =
    database_name = symfony-madrid
    database_user = usuario
    database_password = password

### Recuperar las dependencias

	php bin/vendors install

### Generar el modelo de datos

	php app/console doctrine:schema:update --force

### Configurar Apache (Ubuntu)

Editar el archivo hosts:

	$ sudo gedit /etc/hosts

y añadir la línea siguiente:

	127.0.0.1   www.symfony-madrid.dev

Configuramos un VirtualHost para el nuevo dominio, editando el archivo (nuevo) www.symfony-madrid.dev del directorio sites-available de apache2:

	$ sudo gedit /etc/apache2/sites-available/www.symfony-madrid.dev

con el siguiente contenido:

	<VirtualHost *:80>
		ServerName www.psn.es
		DocumentRoot /home/miusuario/www/symfony-madrid/web
		DirectoryIndex app.php
 
		<Directory "/home/miusuario/www/symfony-madrid/web">
	  		AllowOverride All
	  		Allow from All
			</Directory>
	</VirtualHost>

Habilitamos el nuevo VirtualHost:

	$ sudo a2ensite www.symfony-madrid.dev

Reiniciamos apache:

	$ sudo /etc/init.d/apache2 restart

Comprobamos que el resto de la configuración sea correcta

	http://www.symfony-madrid.dev/config.php

### Configurar los permisos de app/cache y app/logs (Ubuntu)

Instalar el paquete acl

	sudo apt-get install acl

Editar el fichero /etc/fstab y añadir la opción "acl" a la partición donde tenemos nuestro proyecto

	\# /home was on /dev/sda7 during installation
	UUID=d027a8eb-e234-1c9f-aef1-43a7dd9a2345 /home    ext4   defaults,acl   0   2

Reiniciar o volver a montar la partición:

	sudo /bin/mount -o remount /home

Otorgar los permisos a los directorios app/cache y app/logs

	sudo setfacl -R -m u:www-data:rwx -m u:miusuario:rwx app/cache app/logs
	sudo setfacl -dR -m u:www-data:rwx -m u:miusuario:rwx app/cache app/logs
 
#### Más información en: [Setting up Permissions](http://symfony.com/doc/current/book/installation.html#configuration-and-setup)
