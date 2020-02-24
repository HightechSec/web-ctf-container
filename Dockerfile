FROM debian:9.3

LABEL maintainer "Hightech (hightech@backboxindonesia.or.id)"

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y \
    apache2 \
    php \
    nano \
    && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY admin /var/www/html/admin
COPY otp /var/www/html/otp
COPY numeric /var/www/html/numeric
COPY crack /var/www/html/crack
COPY magic /var/www/html/magic
COPY bypass /var/www/html/bypass
COPY index.php /var/www/html/index.php

RUN chown www-data:www-data -R /var/www/html && \
    rm /var/www/html/index.html

EXPOSE 80

COPY main.sh /
ENTRYPOINT ["/main.sh"]