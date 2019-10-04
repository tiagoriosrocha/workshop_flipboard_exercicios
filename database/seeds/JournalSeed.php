<?php

use Illuminate\Database\Seeder;

class JournalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Journal',100)->create();
    }
}
