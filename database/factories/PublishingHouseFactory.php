<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PublishingHouse;
use Faker\Generator as Faker;

$factory->define(PublishingHouse::class, function (Faker $faker) {
    return [
        'name' => $faker->word . ' Publishing House',
        'country' => $faker->country
    ];
});
