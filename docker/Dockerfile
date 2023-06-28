FROM php:8.0-apache

# Actualizar e instalar Java 17
RUN apt-get update && apt-get install -y openjdk-17-jdk && apt-get clean && rm -rf /var/lib/apt/lists/*

# Impresoras
RUN apt-get update && apt-get install -y avahi-daemon cups cups-bsd cups-ipp-utils && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN systemctl enable avachi-daemon.service

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install pdo pdo_mysql

