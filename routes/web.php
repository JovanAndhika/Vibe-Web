<?php

use App\Http\Controllers\MusicController;
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

Route::get('/testing', [MusicController::class, 'index']);


Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return 'Hiiii';
});


Route::get('/home', function () {
    return 'gatel';
});


Route::get('/home', function () {
    return 'gatel';
});

Route::get('/about', function () {
    return 'Hellllooooo';
});


Route::get('/about', function () {
    return 'Hellllooooo';
});


Route::get('/about', function () {
    return 'Hellllooooo';
});

Route::get('/about', function () {
    return 'Hellllooooo';
});


Route::get('/about', function () {
    return 'Hellllooooo';
});


Route::get('/about', function () {
    return 'Hellllooooo';
});