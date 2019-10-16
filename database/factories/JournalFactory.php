<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Journal;
use Faker\Generator as Faker;

$factory->define(Journal::class, function (Faker $faker) {
    return [
        'name' => $faker->country . " " . $faker->randomElement($array = array('Journal','Magazine')),
        'user_id' => rand(1,100)
    ];
});
