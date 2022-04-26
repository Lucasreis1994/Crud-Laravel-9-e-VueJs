# Crud-Laravel-9-e-VueJs

- Importar o arquivo Insomnia.json para o Insomnia, e acredito que funcione no postman também, para simular as requisições para a apis

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

- Entrar na pasta do projeto

- sudo chown -R $USER: .

- vendor/bin/sail up -d

#criar a base de dados
- mysql --password=  --execute='create database example_app'
- exit

start no container
- vendor/bin/sail bash

Copiar o .env
- cp .env.example .env

- php artisan key:generate
- php artisan migrate

#front-ends
- npm install
- npm run dev
- npm run prod
- npm run watch