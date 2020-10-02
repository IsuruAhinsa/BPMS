<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'cover' => $faker->imageUrl(2000, 1360, null, true, 'news'),
        'title' => $faker->sentence,
        'slug'  => $faker->slug,
        'body'  => $faker->paragraph(3),
        'role'  => $faker->randomElement(array('admin', 'coach')),
    ];
});
