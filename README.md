# Todo App

## Requirements

 - Laravel
 - Docker
 - Cypress (E2E Testing)
 - Comoser & NPM

## Create a database

### Docker Postgres
This app uses Docker to run Postgress. If you dont want to run Docker feel free to run any SQL based database and hook it up to the laravel application.
```
$ cd docker
$ docker-compose -f docker-compose.yml up
```
Posgress is now running on localhost, port 5432.
The default password/username is postgres/example.
  

## Init the App

### Install dependancies
```
Composer install
npm install
```
  
  

## Run in dev

### Migrate the database

```
php artisan migrate
```
  

### Vite
```
npm run dev
```
  ### Run the todo app in localhost
  ```
php artisan serve
  ```
  

## Develope the App

tailwind
```
npx tailwindcss -i sass/app.scss -o css/app.css --watch
```
  
  

## Testing

If you'd like to run tests on the app you can use Cypress 
```
npx cypress open
```