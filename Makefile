dev-start:  ## Start dev env
	docker-compose up --build -d;
	docker exec -it statooine sh -c "composer install"

dev-stop:  ## Stop dev env
	docker-compose down

shell: ## Connect to shell
	docker exec -it statooine sh

db-setup: ## Set up database
	docker exec -it statooine sh -c "bin/console d:d:d --force --quiet; bin/console d:d:c;  bin/console d:s:u --force; bin/console doctrine:fixtures:load"

graphql-compile: ## Set up database
	docker exec -it statooine sh -c "bin/console graphql:compile"
