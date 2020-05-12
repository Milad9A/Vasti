<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'author' => $faker->firstName . ' ' . $faker->lastName,
        'summary' => $faker->paragraph,
        'isbn' => $faker->isbn13,
        'image' => 'not available',
        'rating' => $faker->numberBetween(0, 5),
    ];
});
