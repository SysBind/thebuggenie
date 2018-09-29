FROM php:7.2-apache
RUN apt update -y && apt install -y libpq-dev libpng-dev git
RUN docker-php-ext-install gd
RUN docker-php-ext-install pdo_pgsql
RUN a2enmod rewrite

COPY . /var/www/tbg
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); die(2); } echo PHP_EOL;" && php composer-setup.php && php -r "unlink('composer-setup.php');" && mv composer.phar /usr/local/bin/composer

RUN mkdir  /var/www/tbg/cache && chown www-data cache
RUN cd /var/www/tbg && composer install
VOLUME ["/data"]
RUN ln -fsv /data/files /var/www/tbg/files
WORKDIR /var/www/tbg
RUN mv -v b2db.yml.dist b2db.yml