<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'dob' => $faker->dateTimeBetween('1990-01-01', '2015-12-31')->format('Y-m-d'),
        'image' => public_path('images/player.png'),
        'mobile' => $faker->phoneNumber,
        'nic' => $faker->randomNumber(9, false),
        'email' => $faker->unique()->safeEmail,
        'height' => 25.32,
        'weight' => 20.24,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'remember_token' => Str::random(10),
    ];
});
