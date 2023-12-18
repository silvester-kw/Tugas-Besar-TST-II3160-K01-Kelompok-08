setup:
	@make composer-setup
	@make build
	@make run
	@make database-migrate
	@echo Setup successful, website running on localhost:8080
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
run:
	docker-compose up -d
copy-env:
	copy .env.example .env
composer-setup:
	composer install
database-migrate:
	echo "Starting database migration"
	docker exec -i wahanaku-database-1 bash -c "sleep 10"
	docker exec wahanaku-app-1 bash -c "yes | php spark migrate:refresh"
	echo "Finished database migration"
	echo "Starting database seeding"
	docker exec wahanaku-app-1 bash -c "php spark db:seed AllSeeder"
	echo "Finished database seeding"