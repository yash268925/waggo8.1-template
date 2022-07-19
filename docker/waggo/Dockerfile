FROM alpine as source

ARG credential
RUN apk add git
RUN git config --global credential.helper store \
 && echo $credential > /root/.git-credentials \
 && chmod 600 /root/.git-credentials \
 && git clone https://github.com/abatanx/waggo8.git

FROM yash268925/php-pgsql:php8.0

COPY php.ini /usr/local/etc/php/conf.d/php.ini
COPY --from=source /waggo8 /var/www/sys/waggo8

RUN cd /var/www \
 && mkdir -p logs pub resources sys temporary tpl upload \
 && mkdir sys/config sys/include \
 && chmod 777 logs resources temporary upload

COPY waggo.localhost.php /var/www/sys/config/waggo.localhost.php
