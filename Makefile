build:
	cp .env.example .env
	docker-compose build
	docker-compose up -d
	docker exec artw_library-app-1 composer i
	docker exec artw_library-app-1 php artisan migrate --force --seed
