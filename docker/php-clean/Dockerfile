FROM php:8.4-cli-alpine

# Copy the official Composer binary from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/app
