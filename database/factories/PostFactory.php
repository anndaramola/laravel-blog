<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => rand(1,5),
        'title' => ucfirst($faker->text(125)),
        'content' => "<p>" . $faker->paragraph . "</p><p>" . $faker->paragraph . "</p><p>" . $faker->paragraph . "</p><p>" . $faker->paragraph . "</p>",
        'publish_date' => $faker->dateTime,
    ];
});
