<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// factory(\App\User::class, 1)->create();

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$m5BGK6VieqFRayRbwFMe1.omH4DXZlzbeeAHiJviCmTrcFMLBRA02', // password
        'tipe_akun' => 'adm',
        'remember_token' => Str::random(10),
    ];
});
