FROM php:5.6-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN mkdir /home/dependency-injection-training

COPY . /home/dependency-injection-training
WORKDIR /home/dependency-injection-training

CMD [ "php", "./script/run.php" ]
