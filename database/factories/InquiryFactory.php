<?php

use Faker\Generator as Faker;

$factory->define(App\Inquiry::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->text(40),
        'text' => $faker->realText(100),
        'created_at' => $faker->dateTimeThisMonth,
        'user_id' => \App\User::inRandomOrder()->first()->id,
    ];
});
