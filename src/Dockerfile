FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && \
    apt-get install -y wget && \
    wget https://getcomposer.org/installer -O /tmp/composer-setup.php && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm /tmp/composer-setup.php
COPY . /var/www/html
RUN composer self-update --2
RUN apt-get update && \
    apt-get install -y wget && \
    wget https://phar.phpunit.de/phpunit-9.phar -O /usr/local/bin/phpunit && \
    chmod +x /usr/local/bin/phpunit
WORKDIR /var/www/html
RUN echo phpunit --version
# ENTRYPOINT [ "./vendor/bin/phpunit" ] 
RUN apt-get update && apt-get upgrade -y
