<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Davi Sermarini',
            'usuario' => 'davi',
            'email' => 'davi@voxdigital.com.br',
            'senha' => Hash::make('1234'),
        ]);
    }
}
