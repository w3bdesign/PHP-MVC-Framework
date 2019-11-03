# docker run -d -p 80:80

FROM php:7.3-apache
COPY . /var/www/html/
