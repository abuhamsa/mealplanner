FROM php:8.1.1-apache
WORKDIR /var/www/html

COPY src/ /var/www/html
#ADD php.ini /usr/local/etc/php/php.ini


RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# use development php ini
RUN mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
# set default timezone
RUN sed -ri -e 's!;date.timezone =!date.timezone = "Europe/Zurich"!g' /usr/local/etc/php/php.ini

EXPOSE 80