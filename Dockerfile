FROM php:7.3.18-alpine

EXPOSE 8000

RUN \
    # Use development settings
    mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"; \
    # Install composer
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer; \
    # Install Yarn
    apk add yarn;

COPY . /src/validformbuilder
WORKDIR /src/validformbuilder

RUN yarn install && composer install --no-interaction --optimize-autoloader && \
    # Always install the most recent version of ValidForm Builder
    composer update validformbuilder/validformbuilder;

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public/"]
