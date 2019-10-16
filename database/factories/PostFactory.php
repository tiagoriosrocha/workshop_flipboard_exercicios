<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,100),
        'journal_id' => rand(1,100),
        'title' => $faker->realText($maxNbChars = 50, $indexSize = 2),
        'content' => $faker->realText($maxNbChars = 10000, $indexSize = 2),
    ];
});
