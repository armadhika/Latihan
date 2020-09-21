<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kontak;
use Faker\Generator as Faker;

$factory->define(Kontak::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->e164PhoneNumber

    ];
});
