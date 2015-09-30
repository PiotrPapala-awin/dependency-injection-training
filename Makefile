CodeSnifferCheck:
	vendor/bin/phpcs -p --colors --standard=PSR2 src/

build:
	docker build -t dependency-app .

run_dependency_app:
	docker run -it --rm --name my-running-app dependency-app

exec:
	docker run -it --rm --name my-running-app dependency-app bash

.PHONY: CodeSnifferCheck build run_dependency_app exec
