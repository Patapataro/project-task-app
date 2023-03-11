# Task App
This Laravel web app uses the TALL stack and uses Postgres for the database.

#### App Requirements
 - Laravel
 - Docker
 - Cypress (E2E Testing)
 - Comoser & NPM
  

## Initialize the App

### Install dependancies
```
Composer install
npm install
``` 

### Create a database

#### Using a Docker Postgres Image
This app uses Docker to run Postgress. If you dont want to run Docker feel free to run any SQL based database and hook it up to the laravel application using the .env file.

Docker Desktop is running then run the following commands.
```
$ cd docker
$ docker-compose -f docker-compose.yml up
```
Posgress is now running on localhost, port 5432.
Use a database manager to connect to Postgres.
The default password/username is postgres/example.
Create a database and edit Laravel's .env file with the correct credentials.
  

#### Migrate the database
```
php artisan migrate
```
  
### Run in dev
#### Vite
```
npm run dev
```
Generate encryption key and run the todo app on localhost
```
php artisan key:generate
php artisan serve
```

## Testing

If you'd like to run tests on the app you can use Cypress 
```
npx cypress open
```

## Deploy the App

Minify CSS with vite.
```
 npm run build
```
 Cache the Laravel files.
```
$ composer install  --optimize-autoloader  --no-dev
$ php artisan  config:cache
$ php artisan  route:cache
$ php artisan  view:cache
```
Be sure to set APP_DEBUG to false in your .env file to prevent error logging in production.

Follow the [Laravel Deployment Document](https://laravel.com/docs/10.x/deployment)
for more information on configuring your server.



