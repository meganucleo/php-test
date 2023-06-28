FROM php:8.0-apache

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install pdo pdo_mysql

# Agregar repositorio de Debian para OpenJDK 11
RUN echo "deb http://deb.debian.org/debian buster-backports main" > /etc/apt/sources.list.d/backports.list

# Actualizar e instalar Java 11
RUN apt-get update && apt-get install -y openjdk-11-jdk
