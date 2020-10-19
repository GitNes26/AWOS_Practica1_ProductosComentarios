<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->sentence(3),
        'user_id' => App\User::all()->random()->id,
        'product_id' => App\Product::all()->random()->id
    ];
});
