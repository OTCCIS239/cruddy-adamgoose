<?php

use Faker\Generator as Faker;

$factory->define(App\Tabletop::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'genre' => $faker->word,
        'min_players' => $faker->randomDigitNotNull,
        'max_players' => $faker->randomDigitNotNull,
    ];
});
