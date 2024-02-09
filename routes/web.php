<?php

use Illuminate\Support\Facades\Route;

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
    $data =[
        "hello" => "Hello ",
        "name" => "Nicolò",
        "surname" => "Manunta",
        "random_numbers" => [
            1, 2, 3, 4, 5, 6, 6, 7, 8, 9
        ]
    ];
    return view('home', $data);
});



