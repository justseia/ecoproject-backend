up:
	docker-compose up -d

down:
	docker-compose down

exec:
	docker exec -it ecoproject_app bash

f:
	php artisan migrate:fresh --seed