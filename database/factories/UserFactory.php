<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
	static $password;
    $name = $faker->name;
    return [
        'name' => $name,
        'email' => $faker->unique()->safeEmail,
        'username' => str_slug($name),
        'password' => $password ?: $password = Hash::make('secret'),
        'remember_token' => str_random(10),
        'confirm_token' => str_random(25)
    ];
});
