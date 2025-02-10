FROM php:8.2-fpm
RUN ln -sf /bin/bash /bin/sh
RUN eval $(ssh-agent)

##################################################
# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
##################################################

##################################################
# ZIP/UNZIP for composer
# Install unzip utility and libs needed by zip PHP extension
RUN apt update && apt install -y \
    zlib1g-dev \
    libzip-dev \
    unzip \
    git \
    sendmail  \
    libpng-dev \
    libmemcached-dev  \
    libssl-dev \
    libgmp-dev \
    libpq-dev

###RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install calendar
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install gd
RUN docker-php-ext-install gmp
RUN yes '' | pecl install -f memcached-3.2.0 \
  && docker-php-ext-enable memcached
##################################################

##################################################
# PDO
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-install pgsql pdo_pgsql
##################################################

##################################################
# Mongo DB
RUN apt install -y autoconf pkg-config libssl-dev
RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini
##################################################

##################################################
# IMAGE MAGIK
RUN apt install -y libmagickwand-dev libmagickcore-dev
RUN pecl install imagick
RUN docker-php-ext-enable imagick
##################################################

##################################################
#CHMOD CHOWN
RUN chmod -R 777 /srv
RUN chmod -R 777 /var/www
##################################################

##################################################
###WORKDIR /var/www/zero.home/
###ENV COMPOSER_ALLOW_SUPERUSER=1
###RUN ls -al
###RUN composer install
##################################################

##################################################
#CHMOD CHOWN
RUN chmod -R 777 /srv
RUN chmod -R 777 /var/www
##################################################
###RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
###RUN systemctl restart sshd
##################################################
###ENTRYPOINT /root/sewa/avtostart/001.sh
###ENTRYPOINT []