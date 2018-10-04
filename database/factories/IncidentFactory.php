<?php

use Faker\Generator as Faker;

$factory->define(App\Incident::class, function (Faker $faker) {
    return [
        //
        'url' => $faker->url,
        'organization' => $faker->company,
        'contact_person' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'comment' => $faker->text,
        'user_id' => \App\User::inRandomOrder()->first()->id,
        'cms_id' => \App\CMS::inRandomOrder()->first()->id,
        'registrar_id' => \App\Registrar::inRandomOrder()->first()->id,
        'type_id' => \App\IncidentType::inRandomOrder()->first()->id,
        'detection_at' => $faker->dateTime,
        'screenshots' => json_encode(['default.jpg']),

    ];
});
