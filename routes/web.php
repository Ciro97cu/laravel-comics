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
    $comicsArray = config('comics');
    return view('partials.home', ["array" => $comicsArray]);
});

Route::get('/card', function () {
    $comicsArray = config('comics');
    return view('partials.homeCard', ["array" => $comicsArray]);
});
