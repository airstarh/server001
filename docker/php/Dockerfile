FROM php:8.2-fpm

# Set default shell to bash and start ssh-agent
RUN ln -sf /bin/bash /bin/sh && \
  eval $(ssh-agent)

##################################################
# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
##################################################

##################################################
# ZIP/UNZIP for composer
# Install unzip utility and libs needed by zip PHP extension
RUN apt update && \
  apt install -y \
  zlib1g-dev \
  libzip-dev \
  unzip \
  git \
  sendmail \
  libpng-dev \
  libmemcached-dev \
  libssl-dev \
  libgmp-dev \
  libpq-dev \
  autoconf \
  pkg-config \
  libmagickwand-dev \
  libmagickcore-dev && \
  rm -rf /var/lib/apt/lists/*
##################################################

# Install PHP extensions
RUN docker-php-ext-install zip calendar bcmath gd gmp pdo pdo_mysql mysqli pgsql pdo_pgsql && \
  yes '' | pecl install -f memcached-3.2.0 && \
  docker-php-ext-enable memcached

##################################################
# Mongo DB
RUN pecl install mongodb && \
  echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini
##################################################

##################################################
# IMAGE MAGIK
RUN apt install -y libmagickwand-dev libmagickcore-dev && \
  pecl install imagick-3.7.0 && \
  docker-php-ext-enable imagick
##################################################

##################################################
# CHMOD CHOWN
# Set permissions only once
RUN chmod -R 777 /srv /var/www
##################################################

##################################################
### WORKDIR /var/www/zero.home/
### ENV COMPOSER_ALLOW_SUPERUSER=1
### RUN ls -al
### RUN composer install
##################################################

##################################################
### RUN echo "PermitRootLogin yes" >> /etc/ssh/sshd_config
### RUN systemctl restart sshd
##################################################
### ENTRYPOINT /root/sewa/avtostart/001.sh
### ENTRYPOINT []
