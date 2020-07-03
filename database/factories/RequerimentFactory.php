<?php

use Faker\Generator as Faker;

$factory->define(App\Requeriment::class, function (Faker $faker) {
    return [
        'course_id'    => \App\Course::all()->random()->id,
        'requeriment'  => $faker->sentence
    ];
});
