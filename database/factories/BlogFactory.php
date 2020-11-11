<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'job' => $faker->jobTitle,
        'email' => $faker->name."@gmail.com",
    ];
});
