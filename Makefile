all:

# Build containers separately

build-php:
	docker build -t php-apache -f docker/php-apache/Dockerfile .

build-mysql:
	cd docker/mysqldb && make build

# Build all containers

buildall:
	make build-php
	make build-mysql

# Kill all containers

killall:
	cd docker/mysqldb && make killmysql

# Start containers separately

start-mysql:
	cd docker/mysqldb && make startall

# Start all containers

startall:
	make start-mysql

# Start the application

application:
	docker run -it --link mysql_server:db_alias php-apache php ./script/run.php

# Enter php container bash

bash:
	docker run -it --link mysql_server:db_alias php-apache bash

# Run all tests

tests:
	vendor/bin/phpcs -p --colors --standard=PSR2 src/

.PHONY: build-php build-mysql buildall killall start-php start-mysql startall application bash tests
