<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use App\User;
use App\Team;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker)  {

    return [
        'first_name' => $faker-> firstNameMale(),
        'last_name' => $faker-> lastName(),
        'user_id' => rand(1, 100),
        'team_id' => rand(1, 50)

    ];
    
});
