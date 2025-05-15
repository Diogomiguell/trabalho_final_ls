<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Criando usuários falsos por meio do UserSeeder 
        User::factory()
        ->count(20)
        ->create();

        //Criando usuário de teste
        if (!User::where('email', 'diogo@email.com')->first()) {
            User::create([
                'name' => 'Diogo',
                'email' => 'diogo@email.com',
                'password' => Hash::make('12345678', ['rounds' => 12])
            ]);
        }
    }
}
