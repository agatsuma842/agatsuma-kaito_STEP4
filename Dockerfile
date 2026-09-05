FROM php:8.3-apache

COPY src/ /var/www/html/

COPY src/practice.php /var/www/html/
