# Imagen base de PHP con Apache
FROM php:8.2-apache

# Copia el código fuente
COPY src/ /var/www/html/

# Instala extensión MySQLi
RUN docker-php-ext-install mysqli

# Expone el puerto 80
EXPOSE 80
