<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'firstName' => 'Lucas',
        'lastName' => 'Oliveira',
        'email' => 'contato@lucas.com',
        'password' => bcrypt('12345678'), // passando um crypt para a senha vim em hash
       ]); // Criando um User falso para testar com o Seeder
    }
}
