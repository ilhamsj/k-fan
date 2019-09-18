<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Layanan;
use Faker\Generator as Faker;

$factory->define(Layanan::class, function (Faker $faker) {
    return [
        'paket_id'  => $faker->numberBetween($min = 1, $max = 3),
        'produk_id'  => $faker->numberBetween($min = 1, $max = 10),
    ];
});
