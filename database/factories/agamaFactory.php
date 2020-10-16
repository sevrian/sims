<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Master\Agama;
use Faker\Generator as Faker;

$factory->define(Agama::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
    ];
});
