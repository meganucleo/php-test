FROM php:8.0-apache

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y default-jdk
