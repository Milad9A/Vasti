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
        'language' => $faker->country,
        'image' => 'not available',
        'rating' => $faker->numberBetween(0, 5),
    ];
});
