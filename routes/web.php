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
    return view('index');
});
Route::get('/game', function () {
    return view('download');
});
Route::get('/competition', function () {
    return view('competition');
});
Route::get('/game_entries', function () {
    return view('game_entries');
});
Route::get('/webinar', function () {
    return view('webinar');
});
