FROM php:8.0-apache

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install pdo pdo_mysql

# Define el comando para iniciar Apache
CMD ["apache2ctl", "-D", "FOREGROUND"]
