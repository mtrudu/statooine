FROM alpine:3.8

ENV LANG="en_US.UTF-8" \
    LC_ALL="en_US.UTF-8" \
    LANGUAGE="en_US.UTF-8" \
    TERM="xterm" \
    DEBIAN_FRONTEND="noninteractive" \
    SYMFONY_ALLOW_APPDEV=1 \
    NODE_VERSION=8.14.0 \
    GOSU_VERSION=1.11 \
    COMPOSER_ALLOW_SUPERUSER=1

RUN apk add --update \
    php7-fpm \
    php7-apcu \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-imagick \
    php7-json \
    php7-intl \
    php7-mcrypt \
    php7-fileinfo\
    php7-mbstring \
    php7-opcache \
    php7-openssl \
    php7-pdo \
    php7-pdo_pgsql \
    php7-mysqli \
    php7-xml \
    php7-zlib \
    php7-phar \
    php7-tokenizer \
    php7-session \
    php7-simplexml \
    php7-xdebug \
	php7-xmlreader \
	php7-xmlwriter \
    php7-zip \
    nginx \
    supervisor \
    make \
    curl

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

RUN rm -rf /etc/nginx/nginx.conf
ADD nginx/nginx.conf /etc/nginx/
ADD nginx/symfony.conf /etc/nginx/conf.d/

RUN echo "upstream php-upstream { server 127.0.0.1:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN adduser -D -g '' -G www-data www-data

RUN curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

ADD php-fpm/symfony.ini /etc/php7/conf.d/
ADD php-fpm/symfony.ini /etc/php7/cli/conf.d/
ADD php-fpm/xdebug.ini  /etc/php7/conf.d/

RUN rm -rf /etc/php7/php-fpm.d
ADD php-fpm/symfony.pool.conf /etc/php7/php-fpm.d/

ADD supervisord/supervisord.conf /etc/supervisor/conf.d/

WORKDIR /var/www/symfony
EXPOSE 81

#RUN chown -R www-data:www-data /var/www/symfony/var

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
