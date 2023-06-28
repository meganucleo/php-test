## php-test

### Directorio

Esta es la estructura de directorio del proyecto

```
php-test/
├── carpetas
│   ├── documentos
│   ├── facturas
│   └── impresion
├── docker
│   ├── actualizar.sh
│   ├── cupsd.conf
│   ├── docker-compose.yml
│   ├── Dockerfile
│   └── recrear.sh
├── LICENSE
├── README.md
└── src
    ├── documentos
    ├── facturas
    ├── impresion
    └── index.php
```

### Archivo .env

Debe de colocarse en el directorio php-test

**DB\_** Son variables que usa el archivo index.php para conectarse a mysql

**MYSQL\_** Son variables que usa el contenedor mysql para el password root y nombre de base a crear

**PMA\_** Son variables que usa phpmyadmin para conectarse a mysql

Ejemplo de archivo .env

```
DB_USERNAME=root
DB_PASSWORD=mysecretpassword
DB_DATABASE=mydatabase
MYSQL_ROOT_PASSWORD=mysecretpassword
MYSQL_DATABASE=mydatabase
PMA_HOST=db
PMA_USER=root
PMA_PASSWORD=mysecretpassword
```

### Carpetas montadas

En el directorio del desarrollo se encuentra el folder **carpetas** dentro del cual se montarán 3 carpetas: **documentos**, **facturas** y **impresion**.

Dichas carpetas tendrán información persistente sin importar la destrucción de los dockers.
