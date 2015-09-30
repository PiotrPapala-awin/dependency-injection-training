all:
	
RunCodeSniffer:
	vendor/bin/phpcs -p --colors --standard=PSR2 src/

build:
	make buildmysql

buildmysql:
	docker build -t mysql_server .

startmysql:
	docker run --name mysql_server -e MYSQL_ROOT_PASSWORD=admin -p 3306:3306 -d mysql_server

killmysql:
	@docker kill mysql_server ||:
	@docker rm -v mysql_server ||:

startall:
	make startmysql

killall:
	make killmysql

mysql-bash:
	docker exec -it mysql_server bash

mysql-initdb:
	docker exec -it mysql_server ./init_db.sh

.PHONY: RunCodeSniffer build buildmysql startmysql killmysql startall killall mysql-bash mysql-initdb
