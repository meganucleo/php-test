FROM php:8.0-apache

# Actualizar e instalar Java 17
RUN apt-get update && apt-get install -y openjdk-17-jdk && apt-get clean && rm -rf /var/lib/apt/lists/*

# Impresoras
#RUN apt-get update && apt-get install -y avahi-daemon dbus-x11 cups cups-bsd cups-ipp-utils && apt-get clean && rm -rf /var/lib/apt/lists/*
#RUN systemctl enable avahi-daemon.service

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

#Instalar dependencias para freetds
RUN apt-get update && \
    apt-get install -y freetds-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* ;\
    ln -s /usr/lib/x86_64-linux-gnu/libsybdb.so /usr/lib/libsybdb.so ;\
    ln -s /usr/lib/x86_64-linux-gnu/libsybdb.a /usr/lib/libsybdb.a
RUN docker-php-ext-install pdo_dblib
RUN docker-php-ext-enable pdo_dblib
# Reiniciar Apache
RUN service apache2 restart
