.DEFAULT_GOAL := help

build: ## build develoment environment
	cp .env.example .env
	docker-compose up -d
	docker-compose run --rm app composer install
	docker-compose run --rm app php artisan migrate

serve: up attach ## Run Serve

up: ## Run app container
	docker-compose up -d app

attach: ## Attach running app container
	docker attach `docker ps -f name=app -f status=running --format "{{.ID}}"`

stop: ## docker-compose stop
	docker-compose stop

exec: ## Into app container
	docker-compose run --rm app sh

tinker: ## Laravel console
	docker-compose run --rm app php artisan tinker

migrate: ## Laravel migrate
	docker-compose run --rm app php artisan migrate

refresh: ## Laravel migrate:refresh --seed
	docker-compose run --rm app php artisan migrate:refresh --seed

.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'