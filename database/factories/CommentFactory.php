<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use App\Tweet;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph,
        'user_id' => $faker->randomElement(User::pluck( 'id' )->toArray()),
        'tweet_id' => $faker->randomElement(Post::pluck( 'id' )->toArray()),
    ];
});