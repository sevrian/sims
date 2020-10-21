<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Master\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'nip' => $faker->creditCardNumber,
        'jenisptk_id_' => $faker->randomDigitNotNull,
        'agama_id' => $faker->randomDigitNotNull,
        'negara_id' => $faker->randomDigitNotNull,
        'password' => $faker->password,
        'nama_guru' => $faker->name,
        'tanggal_lahir' => $faker->date,
        'temapat_lahir' => $faker->city,
        'jenis_kelamin' => $faker->randomElement($array = array('Pria', 'Wanita')),
        'nik' => $faker->randomDigitNotNull,
        'nuptk' => $faker->randomNumber,
        'alamat' => $faker->address,
        'email' => $faker->email,
        'status_aktif' => $faker->randomElement($array = array('aktif', 'tidak')), // array(2, 1, 3),
        'foto' => $faker->imageUrl($width = 640, $height = 480) // 'http://lorempixel.com/640/480/',

    ];
});
