FROM ubuntu:14.04

RUN apt-get update && apt-get install -y \
    git \
    curl \
    php5 \
    php5-cli \
    php5-json \
    php5-intl

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer



EXPOSE 8000

ADD entrypoint.sh /entrypoint.sh
ADD symfony_environment.sh /etc/profile.d/symfony_environment.sh
ADD ./code /var/www

WORKDIR /var/www

RUN chown root:root /var/www/var/

ENTRYPOINT ["/entrypoint.sh"]


