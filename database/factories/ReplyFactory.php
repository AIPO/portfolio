<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reply;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'thread_id' => function () {
            return factory(User::class)->create()->id;
        },
        'content' => $faker->paragraph,

    ];
});
