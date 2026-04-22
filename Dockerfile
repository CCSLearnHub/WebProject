# Use the official PHP image with Apache web server
FROM php:8.2-apache

# Install and enable the mysqli extension required by your database connection
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Enable Apache mod_rewrite for URL routing
RUN a2enmod rewrite

# Copy all your PHP files into the Apache web directory
COPY . /var/www/html/

# Expose port 80 to Render
EXPOSE 80
