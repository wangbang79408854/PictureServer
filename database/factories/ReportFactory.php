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

use Homemaking\Shared\Entities\Report;


$factory->define(Report::class, function(Faker\Generator $faker) {

    return [
        'informer_user_id' => $faker->numberBetween(1, 20),
        'informer_remark'  => $faker->name,
        'subject_type'     => $faker->name,
        'subject_id'       => $faker->numberBetween(1, 20),
        'status'           => $faker->numberBetween(1, 5),
        'handler_user_id'  => $faker->numberBetween(1, 20),
        'handler_remark'   => $faker->name,
    ];
});