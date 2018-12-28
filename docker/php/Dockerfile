#FROM php:7.0.1-apache
FROM php:5.6-apache
#
RUN echo "date.timezone = Europe/Warsaw" > /usr/local/etc/php/conf.d/timezone.ini
#RUN apt-get update && apt-get install -y mysql-client libmysqlclient-dev \
#      && docker-php-ext-install mysqli
#RUN apt-get update \
#      && docker-php-ext-install mysqli
RUN apt-get update \
      && docker-php-ext-install mysqli
RUN a2enmod rewrite
    # Initialize html and php.ini
#COPY src/ /var/www/html/
#COPY config/php.ini /usr/local/etc/php/