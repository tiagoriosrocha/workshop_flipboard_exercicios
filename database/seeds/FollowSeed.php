<?php

use Illuminate\Database\Seeder;
use App\Follow;

class FollowSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++){
        	Follow::create([
        		'user_id' => rand(1,100),
        		'journal_id' => rand(1,100)
        	]);
        }
    }
}
