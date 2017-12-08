<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Homemaking\Shared\Entities\Area;


$factory->define(Area::class, function(Faker\Generator $faker) {

  return [
    'name'      => $faker->text(30),
    'parent_id' => $faker->numberBetween(1, 20),
  ];
});