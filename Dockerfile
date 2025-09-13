FROM php:8.2-cli

RUN apt-get update && \
    apt-get install -y libpng-dev libonig-dev libxml2-dev && \
    docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

RUN useradd -u 1002 -m appuser

WORKDIR /var/www/html/conferencia-buenos-aires

COPY . .

RUN chown -R 1002:1002 /var/www/html/conferencia-buenos-aires

USER 1002:1002

EXPOSE 5001

CMD ["php", "-S", "0.0.0.0:5001"]