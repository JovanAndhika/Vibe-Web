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
    return view('search', [
        "active" => 'search'
    ]);
});

Route::get('/nowPlaying', function () {
    return view('nowPlaying', [
        "active" => 'nowPlaying'
    ]);
});

Route::get('/discoverPlaylist', function () {
    return view('discoverPlaylist', [
        "active" => 'discoverPlaylist'
    ]);
});

Route::get('/history', function () {
    return view('history', [
        "active" => 'history'
    ]);
});

Route::get('/library', function () {
    return view('library', [
        "active" => 'library'
    ]);
});

Route::get('/opening', function () {
    return view('opening', [
        "title" => "opening"
    ]);
});

Route::get('/regist', function () {
    return view('regist', [
        "title" => "regist"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "login"
    ]);
});


Route::get('/testing', [MusicController::class, 'index']);

