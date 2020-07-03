<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name'          => $faker->randomElement(['PHP', 'MYSQL', 'JAVASCRIPT', 'POSTGRESQL', 'MONGODB', 'REDIS', 'LARAVEL', 'ANGULAR', 'REACT', 'VUEJS', 'ELOQUENT', 'BOOTSTRAP', 'SQL', 'HTML5', 'CSS3']),
        'description'   => $faker->sentence
    ];
});
