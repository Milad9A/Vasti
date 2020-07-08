<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'author_id' => factory(\App\Author::class),
        'publishing_house_id' => factory(\App\PublishingHouse::class),
        'title' => $faker->word(),
        'summary' => $faker->paragraph,
        'isbn' => $faker->isbn13,
        'price' => $faker->numberBetween(10, 150),
        'image' => "",
        'language' => $faker->country,
        'rating' => $faker->numberBetween(0, 5),
    ];
});
