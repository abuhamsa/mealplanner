FROM php:8.1.1-apache
WORKDIR /var/www/html


#ADD php.ini /usr/local/etc/php/php.ini
RUN apt update && apt install wget

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# use development php ini
RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
# set default timezone
RUN sed -ri -e 's!;date.timezone =!date.timezone = "Europe/Zurich"!g' /usr/local/etc/php/php.ini

COPY src/ /var/www/html
RUN wget https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css -O /var/www/html/css/bootstrap.min.css
RUN wget https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js -O /var/www/html/js/bootstrap.bundle.min.js
RUN wget https://code.jquery.com/jquery-3.5.1.slim.min.js -O /var/www/html/js/jquery.slim.min.js
EXPOSE 80