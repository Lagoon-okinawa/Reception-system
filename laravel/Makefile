.DEFAULT_GOAL := help

build: env vendor db-init ## build development environment

vendor:
	docker-compose run --rm app composer install
	docker-compose run --rm app php artisan config:clear

serve: up attach ## Run Serve

env:
	cp .env.example .env

up: ## Run app container
	docker-compose up -d web

attach: ## Attach running app container
	docker attach `docker ps -f name=app -f status=running --format "{{.ID}}"`

stop: ## docker-compose stop
	docker-compose stop

exec-app: ## Into app container
	docker-compose exec app ash

exec-db: ## Into db container and connection MySQL
	docker-compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_ROOT_PASSWORD $$MYSQL_DATABASE'

tinker: ## Laravel console
	docker-compose run --rm app php artisan tinker

db-init: migrate seed ## Database initialize

migrate:
	docker-compose run --rm app php artisan migrate --force

refresh: migrate-refresh seed ## Laravel migrate:refresh --seed

migrate-refresh:
	docker-compose run --rm app php artisan migrate:refresh --seed

route:
	docker-compose run --rm app php artisan route:list

seed: ## Laravel db:seed
	docker-compose run --rm app php artisan db:seed --force

test:
	docker-compose run --rm app ./vendor/bin/phpunit

format-dry-run:
	docker-compose run --rm app ./vendor/bin/php-cs-fixer fix --dry-run --diff-format udiff ./

format:
	docker-compose run --rm app ./vendor/bin/php-cs-fixer fix ./

.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'