<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Barang;
use Faker\Generator as Faker;

$factory->define(Barang::class, function (Faker $faker) {
    return [
        'kode'=>$faker->unique()->ean8,
        'nama'=>$faker->name,
        'harga'=>$faker->numberBetween(5000,100000),
        'foto'=>$faker->imageUrl($width=640, $height=480)
    ];
});
