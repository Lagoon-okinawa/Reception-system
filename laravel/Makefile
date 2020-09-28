.DEFAULT_GOAL := help

build: env vendor

build-local: env vendor db-init ## build development environment

vendor: ## vendor settings
	docker-compose run --rm app composer install
	docker-compose run --rm app php artisan config:clear

serve: up attach ## Run Serve

env: ## Copy env files
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

migrate: ## DB migrate
	docker-compose run --rm app php artisan migrate --force

refresh: migrate-refresh seed ## Laravel migrate:refresh --seed

migrate-refresh: ## DB migrate refresh
	docker-compose run --rm app php artisan migrate:refresh --seed

route: ## Laravel routing list display
	docker-compose run --rm app php artisan route:list

seed: ## Laravel db:seed
	docker-compose run --rm app php artisan db:seed --force

test: ## phpunit test run
	docker-compose run --rm app ./vendor/bin/phpunit

format-dry-run: ## Linting format diff
	docker-compose run --rm app ./vendor/bin/php-cs-fixer fix --dry-run --diff-format udiff ./

format: ## Linting code format
	docker-compose run --rm app ./vendor/bin/php-cs-fixer fix ./

.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'
