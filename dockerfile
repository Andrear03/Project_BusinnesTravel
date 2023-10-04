FROM php:8.3-rc-apache

COPY . /var/www/html

RUN docker-php-ext-install mysqli

EXPOSE 80

CMD ["apache2-foreground"]