<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    return [
        'nama'      => $faker->randomNumber(2),
        'jumlah'    => $faker->randomNumber(2),
        'satuan'    => $faker->name,
        'harga'     => $faker->randomNumber(6),
    ];
});
