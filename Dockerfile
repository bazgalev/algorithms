FROM php:8.1-cli
COPY . /srv/app
WORKDIR /srv/app
CMD [ "php", "./src/test.php" ]
