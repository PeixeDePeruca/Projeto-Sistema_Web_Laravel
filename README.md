# Hotel Lobisomem

Sistema web de gerenciamento de hotel, desenvolvido em Laravel como projeto final da disciplina.

## Integrantes e Atividades

* **Luiz**:
  * Estrutura (esqueleto) e MVC: mapeamento do domínio Hotel Lobisomem
  * Banco de Dados e Migrations: tabelas de quartos, hóspedes e reservas
  * Rotas e Views: navegação dinâmica em Blade (quartos.index, hospedes.index, reservas.index) com layout centralizado
  * CRUD e Relacionamentos: cadastro, edição, listagem e exclusão com relacionamentos via Eloquent
  * Povoamento e Seeders: dados de teste via HotelSeeder para validação de banco e rotas

* **Gabriel**:
  * Form Requests com validação (QuartoRequest)
  * Relacionamento (Quarto ↔ Reserva ↔ Hóspede)
  * Autenticação com Laravel Breeze
  * Campo `role` na tabela users (admin, funcionário, hóspede)
  * Middleware de controle de acesso (`CheckAdmin`, `QuartoPolicy`, travas em Controllers)
  * Policy de autorização (QuartoPolicy)
  * Painel Administrativo com métricas dinâmicas e proteção de views
  * README

## Descrição

O sistema permite o cadastro e gerenciamento de quartos de um hotel, incluindo hóspedes e reservas. Possui autenticação de usuários com diferentes níveis de permissão (admin, funcionário, hóspede).

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
```

## Execução

```bash
php artisan serve
```

Acesse em: http://127.0.0.1:8000

## Usuários para teste

* **Administrador**
  E-mail: admin@email.com
  Senha: 12345678

* **Funcionário**
  E-mail: funcionario@email.com
  Senha: 12345678

* **Hóspede**
  E-mail: hospede@email.com
  Senha: 12345678

Funcionalidades:

CRUD completo: Gestão de Quartos, Hóspedes e Reservas.
Painel Administrativo (/admin): Indicadores e métricas do hotel em tempo real.
Autenticação e Registro: Fluxo completo com Laravel Breeze e inserção automática de novos usuários na tabela de Hóspedes.
Controle de Acesso por Perfil (role):
Hóspede: Visualização e criação de reservas próprias (bloqueado para edição e exclusão).
Funcionário: Gestão operacional diária do hotel (CRUDs).
Admin: Acesso total ao sistema e ao painel de métricas.
Segurança e Proteção: Verification via Middlewares e bloqueio direto nos Controllers com telas customizadas de erro (403 e 404).
Validação de Dados: Validação consistente utilizando Form Requests e regras no backend.