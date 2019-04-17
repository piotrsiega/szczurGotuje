<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(11,12),
        'title' => $faker->sentence(3),
        'time' => $faker->bothify('## ??????????'),
        'components' => $faker->bothify('## ????????|## ????????|## ????????|## ????????|## ????????|## ????????|## ????????|## ????????|## ????????|'),
        'exec' => $faker->lexify('?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|?????????? ????? ?????? ???????? ?????|'),
        'comments' => $faker->paragraph(2),
        'img' => $faker->imageUrl(600,377),
        'created_at' => now()
    ];
});

$factory->state(App\Recipe::class, 'sniadania', function (Faker $faker) {
    return [
        'category' => '20'
    ];
});


$factory->state(App\Recipe::class, 'obiady', function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(31,33)
    ];
});


$factory->state(App\Recipe::class, 'dokawy', function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(41,42)
    ];
});


$factory->state(App\Recipe::class, 'kolacje', function (Faker $faker) {
    return [
        'category' => '50'
    ];
});


$factory->state(App\Recipe::class, 'salatki', function (Faker $faker) {
    return [
        'category' => '60'
    ];
});


$factory->state(App\Recipe::class, 'napoje', function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(71,72)
    ];
});


$factory->state(App\Recipe::class, 'szybkie', function (Faker $faker) {
    return [
        'category' => $faker->numberBetween(81,33)
    ];
});