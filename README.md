==Directorio==

php-test/

├── docker/

│ ├── Dockerfile
│ └── docker-compose.yml
├── src/
│ └── index.php
└── .env

==Archivo .env==

Debe de colocarse en el directorio php-test

*DB_* Son variables que usa el archivo index.php para conectarse a mysql

*MYSQL_* Son variables que usa el contenedor mysql para el password root y nombre de base a crear

*PMA_* Son variables que usa phpmyadmin para conectarse a mysql


'''
DB_USERNAME=root
DB_PASSWORD=mysecretpassword
DB_DATABASE=mydatabase
MYSQL_ROOT_PASSWORD=mysecretpassword
MYSQL_DATABASE=mydatabase
PMA_HOST=db
PMA_USER=root
PMA_PASSWORD=mysecretpassword
'''
