<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\House; // asi estaba, pero no funciona
use App\Model;
use Faker\Generator as Faker;

// $factory->define(House::class, function (Faker $faker) {  // asi estaba, pero no funciona
$factory->define(\App\House::class, function (Faker $faker) {
    
    return [
        'tipo' => $faker->sentence(3),
        
    ];

});
