<?php

use Illuminate\Database\Seeder;
use App\user;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',100)->create();

        User::create([
        	'name' => 'Usuário Teste',
	        'email' => 'teste@teste.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt('teste123'), // password
	        'remember_token' => Str::random(10),
        ]);

        User::create([
        	'name' => 'Tiago',
	        'email' => 'tiago@tiago.com',
	        'email_verified_at' => now(),
	        'password' => bcrypt('tiago123'), // password
	        'remember_token' => Str::random(10),
        ]);
    }
}
