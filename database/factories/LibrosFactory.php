<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

// hay que poner el modelo aqui 
$factory->define(\App\Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3),
        'autor' => $faker->name(),
        'genero' => $faker->sentence(1),

        'remember_token' => Str::random(10),
    ];
});
