<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {
    return [
        'nama'      => $faker->randomElement(['Kain Kafan', 'Peti Mati', 'Rumah Duka', 'Ambulans', 'Tenaga Pemakaman']) . " " . $faker->word,
        'jumlah'    => $faker->randomNumber(2),
        'satuan'    => $faker->word,
        'harga'     => $faker->randomNumber(6),
    ];
});
