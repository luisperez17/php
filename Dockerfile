# Usa una imagen base de PHP con Apache
FROM php:8.1-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias del sistema y extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip \
    && apt-get clean

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Copia los archivos de tu proyecto al contenedor
COPY . /var/www/html

# Ejecuta Composer install si se detecta un archivo composer.json
RUN if [ -f /var/www/html/composer.json ]; then composer install; fi

# Expon el puerto 80 para acceder al servidor web
EXPOSE 80