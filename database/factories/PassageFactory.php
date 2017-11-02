<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Models\Passage::class, function (Faker $faker) {
    return [
        'content' => $faker->words(3, true),
        'user_id' => random_int('2', '50'),
        'from' => $faker->words(2, true),
        'author' => $faker->name()
    ];
});
