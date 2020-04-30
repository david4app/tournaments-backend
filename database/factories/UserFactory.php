<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker-> firstNameMale(),
        'last_name' => $faker-> lastName(),
        'password' => $faker -> password(),
        'mail' => $faker-> email()
    ];
});
