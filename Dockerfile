FROM php:8.3-apache

# Copier les fichiers du site
COPY . /var/www/html/

# Activer mod_rewrite si nécessaire
RUN a2enmod rewrite

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80
EXPOSE 80



# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier composer.json et composer.lock
COPY composer.* ./

# Installer les dépendances
RUN composer install --no-dev --optimize-autoloader