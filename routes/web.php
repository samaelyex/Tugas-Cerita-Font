<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/cerita1', function () {
    return view('cerita1');
});

Route::get('/cerita2', function () {
    return view('cerita2');
});

Route::get('/cerita3', function () {
    return view('cerita3');
});

Route::get('/cerita4', function () {
    return view('cerita4');
});