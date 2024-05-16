up:
	docker-compose up -d

down:
	docker-compose down

php-fpm:
	docker-compose exec php-fpm bash

restart:
	docker-compose down && docker-compose up -d

