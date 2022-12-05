.PHONY: help
help: ## Affiche cette aide
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: install
install: vendor/autoload.php ## Installe les différentes dépendances
	composer install

.PHONY: migrate
migrate: vendor/autoload.php ## Migre la base de donnée
	php artisan migrate

.PHONY: fresh
fresh: vendor/autoload.php
	php artisan migrate:fresh

.PHONY: seed
seed: vendor/autoload.php ## Remplie la base de données
	php artisan db:seed

.PHONY: analyze
analyse: vendor/autoload.php
	vendor/bin/phpstan analyse -c phpstan.neon

.PHONY: clear
clear: vendor/autoload.php ## vide le cache de l'application
	php artisan cache:clear && php artisan view:clear && php artisan route:clear
	php artisan media-library:clear

.PHONY: serve
serve: vendor/autoload.php ## lance, le serve de development
	php artisan serve

.PHONE: create
create: vendor/autoload.php # creer un administrateur
	php artisan ngoma:add-user

.PHONE: generate
generate: vendor/autoload.php ## Generate Ide models
	php artisan ide:models

.PHONE: linter
linter: vendor/autoload.php
	php artisan lint:code app/

.PHONY: watch
watch: vendor/autoload.php ## lance, le serve de development
	npm run watch

vendor/autoload.php: composer.lock
	composer install
	touch vendor/autoload.php
