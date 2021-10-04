FROM php:8.0.3-cli-alpine
LABEL maintainer "Sira"
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
VOLUME /www
WORKDIR /www
EXPOSE 80 443
