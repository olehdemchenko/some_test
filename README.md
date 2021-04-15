To launch project:

- `cd laradock`,
- `cp env-example .env`
- `docker-compose up -d nginx php-fpm mysql` `docker-compose build workspace` & `docker-compose build php-fpm mysql`
- `docker-compose exec --user=laradock workspace bash`

Next commands execute under `docker-compose exec --user=laradock workspace bash` shell
- `cp .env.example .env`
- `composer install`
- `npm install`
- `npm run development`
- `php artisan key:generate`
- `php artisan migrate --seed`
- `php artisan storage:link`
