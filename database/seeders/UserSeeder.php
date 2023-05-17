<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'=> 'ADMINISTRADOR',
            'email'=> 'admin@gmail.com',
            'password'=> '123456',
            'isAdmin'=> '1',
        ];
        User::create($dados);
    }
}
