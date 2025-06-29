FROM php:8.2-cli

RUN apt-get update && \
    apt-get install -y libpng-dev libonig-dev libxml2-dev && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

WORKDIR /var/www/html

COPY . .

EXPOSE 5001
CMD ["php", "-S", "0.0.0.0:5001"]