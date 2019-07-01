FROM php:7.2-apache
COPY . /var/www/html
COPY dockerfiles/000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
	php composer-setup.php && php -r "unlink('composer-setup.php');"
RUN apt update && apt install -y libpng-dev libzip-dev libpq-dev git && docker-php-ext-install gd zip pdo_pgsql && pecl install apcu && docker-php-ext-enable apcu
RUN php composer.phar update && php composer.phar install
RUN chown www-data public && touch /var/www/html/core/config/b2db.yml
COPY dockerfiles/b2db.yml /var/www/html/core/config/b2db.yml
