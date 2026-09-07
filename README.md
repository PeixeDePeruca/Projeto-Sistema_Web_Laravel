# Hotel Lobisomem

## Integrantes e Atividades

* **Luiz**: Módulo de Quartos (Model, Migration, Controller, Rotas e Views de Cadastro/Edição).
* **Gabriel**: Form Requests com validação, Relacionamento (Quarto ↔ Reserva), Autenticação (Breeze), campo `role`, Middleware, Policies.

## Descrição

O sistema permite o cadastro e gerenciamento de quartos de um hotel, incluindo as reservas. Possui autenticação de usuários com diferentes níveis de permissão (admin, funcionário, hóspede).

## Tecnologias utilizadas

* Laravel 13
* PHP 8.5
* PostgreSQL
* Blade
* Laravel Breeze

## Instalação

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run build

## Funcionalidades

* CRUD completo de Quartos
* Relacionamento entre Quartos e Reservas
* Autenticação com Laravel Breeze
* Controle de acesso por perfil de usuário (role)
* Middleware de proteção de rotas
* Policies para autorização de ações
* Validação de formulários com Form Requests
