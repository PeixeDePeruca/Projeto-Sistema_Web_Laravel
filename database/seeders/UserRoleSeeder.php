<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRoleSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Funcionário',
            'email' => 'funcionario@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'funcionario',
        ]);

        User::create([
            'name' => 'Hóspede',
            'email' => 'hospede@email.com',
            'password' => Hash::make('12345678'),
            'role' => 'hospede',
        ]);
    }
}