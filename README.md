# Constr Up API

API Laravel para CRUD de produtos, desenvolvida como teste técnico.

## Tecnologias
- Laravel 12
- MySQL

## Como rodar
1. `composer install`
2. Copie `.env.example` para `.env` e configure o banco MySQL
3. `php artisan key:generate`
4. `php artisan migrate`
5. `php artisan serve`

API disponível em `http://localhost:8000/api/products`

## Endpoints
- `GET /api/products` — lista todos os produtos
- `POST /api/products` — cria um novo produto
- `PUT /api/products/{id}` — edita um produto
- `DELETE /api/products/{id}` — exclui um produto