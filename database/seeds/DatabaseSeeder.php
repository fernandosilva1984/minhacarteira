<?php

use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Jose Fernando da Silva',
            'email'=>'fernandosilva1984@yahoo.com.br',
            'password'=>bcrypt('123456'),
        ]);
    }
}
