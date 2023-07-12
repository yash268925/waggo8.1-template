FROM php:8.1-apache

RUN apt update \
 && apt install -y libpq-dev libonig-dev libicu-dev \
 && docker-php-ext-install pdo pdo_pgsql pgsql mbstring intl pcntl

RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
 && apt install nodejs build-essential

RUN a2enmod rewrite

COPY php.ini /usr/local/etc/php/conf.d/php.ini

ENV APACHE_DOCUMENT_ROOT /var/www/pub

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www
RUN rm -r /var/www/html

EXPOSE 80 5173

COPY --chmod=755 entrypoint /entrypoint

ENTRYPOINT ["/entrypoint"]
CMD "apache2-foreground"
