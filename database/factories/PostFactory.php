<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
		'titulo'		=> $faker->sentence(),
		'contenido'		=> $faker->paragraphs(rand(2,10), true)
    ];
});
