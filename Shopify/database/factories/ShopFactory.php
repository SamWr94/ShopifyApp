<?php

use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'description' => $faker->text,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'address' => $faker->address,
        'lat' => $faker->latitude(50.10319, 60.15456),
        'lng' => $faker->longitude(-7.64133, 1.75159)
    ];
});
