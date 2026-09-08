<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quarto;
use App\Models\Hospede;

class HotelSeeder extends Seeder
{
    public function run(): void
    {
        //povoamento da tabela Quartos
        Quarto::create([
            'nome' => 'Suíte Prata Purificada',
            'nivel_blindagem' => 'Aço Titânio',
            'capacidade' => 2,
            'preco_diaria' => 450.00,
        ]);


        Quarto::create([
            'nome' => 'Suíte Lua Cheia',
            'nivel_blindagem' => 'Reforçado',
            'capacidade' => 4,
            'preco_diaria' => 800.00,
        ]);


        //povoamento da tabela Hóspedes
        Hospede::create([
            'nome' => 'Tony Ramos',
            'cpf' => '12345678900',
            'telefone' => '42999999999',
            'email' => 'tony.ramos@email.com',
        ]);


        Hospede::create([
            'nome' => 'Remus Lupin',
            'cpf' => '98765432100',
            'telefone' => '42988888888',
            'email' => 'lupin@hogwarts.edu',
        ]);


    }
}