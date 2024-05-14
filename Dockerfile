# Use an official PHP image
FROM php:7.4.1

RUN docker-php-ext-install pdo_mysql

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents to the working directory
COPY . /var/www

# Expose port 8000 for the artisan serve
EXPOSE 8000

RUN php artisan config:cache
RUN php artisan cache:clear


# Start PHP's built-in development server
CMD php artisan serve --host=0.0.0.0 --port=8000