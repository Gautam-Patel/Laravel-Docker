<?php

use Faker\Generator as Faker;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return \App\User::all();
});


Route::get('create-user', function(Faker $faker) {
    \App\User::create(array(
        'name'     => $faker->name,
        'username' => $faker->unique()->safeEmail,
        'email'    => $faker->unique()->safeEmail,
        'password' => Hash::make('testtest'),
    ));

    return 'User created';
});