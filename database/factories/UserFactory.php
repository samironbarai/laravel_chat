<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Message;
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
    return [
        'name' => $faker->name,
        'avatar' => 'https://via.placeholder.com/150',
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$jWlKgEdG2oruR4UJ1SFyZOs9i.TTG4KEMT2VVH7WSpMD/jtMIlrpm', // 123456
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Message::class, function (Faker $faker) {
    do {
        $from = rand(1, 30);
        $to = rand(1, 30);
        $is_read = rand(0, 1);
    } while ($from === $to);

    return [
        'from' => $from,
        'to' => $to,
        'message' => $faker->sentence,
        'is_read' => $is_read
    ];
});
