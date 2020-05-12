<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'book_id' => factory(\App\Book::class),
        'body' => $faker->paragraph,
    ];
});
