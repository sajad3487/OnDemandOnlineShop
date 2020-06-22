<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\currency;
use App\discount;
use App\quotation;
use App\RequestItem;
use App\User;
use App\wishList;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'address'=>$faker->address,
        'tel'=>$faker->phoneNumber,
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
$factory->define(quotation::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'status' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

$factory->define(RequestItem::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'quotation_id' => $faker->numberBetween(1,10),
        'link' => $faker->url,
        'quantity' => $faker->numberBetween(1,5),
        'description' => $faker->text,
        'rules' => $faker->boolean(true),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
$factory->define(currency::class, function (Faker $faker) {
    return [
        'usd' => $faker->numberBetween(10000,90000),
        'euro' => $faker->numberBetween(10000,90000),
        'pound' => $faker->numberBetween(10000,90000),
        'canada_dollar' => $faker->numberBetween(10000,90000),
        'uae' => $faker->numberBetween(10000,90000),
        'tl' => $faker->numberBetween(10000,90000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
$factory->define(wishList::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,10),
        'link' => $faker->url,
        'description' => $faker->text,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
$factory->define(discount::class, function (Faker $faker) {
    return [
        'percentage' => $faker->numberBetween(1,50),
        'discount_code' => Str::random(5),
        'discount_expiration' => $faker->date(),
        'limit' => $faker->numberBetween(100000,500000),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
