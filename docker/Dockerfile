FROM php:8.0-apache

# Actualizar e instalar Java 17
RUN apt-get update && apt-get install -y openjdk-17-jdk && apt-get clean && rm -rf /var/lib/apt/lists/*

# Impresoras
#RUN apt-get update && apt-get install -y avahi-daemon dbus-x11 cups cups-bsd cups-ipp-utils && apt-get clean && rm -rf /var/lib/apt/lists/*
#RUN systemctl enable avahi-daemon.service

# Instalar extensiones de PHP requeridas
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli 

#Instalar FreeTDS
RUN apt-get install -y --no-install-recommends \
freetds-dev freetds-bin freetds-common libdbd-freetds libsysbdb5 libqt4-sql-tds libqt5sql5-tds ;\
ln -s /usr/lib/x86_64-linux-gnu/libsybdb.so /usr/lib/libsybdb.so ;\
ln -s /usr/lib/x86_64-linux-gnu/libsybdb.a /usr/lib/libsybdb.a ;\
docker-php-ext-install mssql ;\
docker-php-ext-configure mssql

