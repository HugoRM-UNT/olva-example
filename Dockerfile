# Usamos una imagen oficial de PHP con Apache
FROM php:8.4-apache

# Instalamos las dependencias del sistema, Node.js y las extensiones de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql gd

# Habilitamos la reescritura de URLs en Apache (necesario para las rutas de Laravel)
RUN a2enmod rewrite

# Apuntamos Apache a la carpeta "public" de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copiamos todo el código de tu proyecto al contenedor
COPY . /var/www/html

# Instalamos Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalamos las dependencias de Laravel y compilamos el frontend (Vite)
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Damos permisos a las carpetas que Laravel necesita para escribir archivos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache