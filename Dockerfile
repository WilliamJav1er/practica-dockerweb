# Imagen base de PHP con Apache
# Imagen base PHP con Apache
FROM php:8.2-apache

# Copia el código fuente
COPY src/ /var/www/html/

# Instala extensión mysqli para conectar con MySQL
RUN docker-php-ext-install mysqli

# Expone puerto 80
EXPOSE 80
