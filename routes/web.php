<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/search', function () {
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

// Before Login
Route::group(['middleware' => 'guest'], function(){
    // home
    Route::get('/', function(){
        return view('opening', [
            "title" => "opening"
        ]);
    })->name('home');

    // register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
});

// After Login
Route::group(['middleware' => 'auth'], function(){
    // role user
    Route::group(['middleware' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
        // TODO: ini sementara. PR buat user controller
        Route::get('/', function () { return view('user.temp_index'); })->name('index');
    });

    // role admin
    Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/addsong', [AdminController::class, 'add_song'])->name('add');
        Route::post('/store', [AdminController::class, 'store_song'])->name('store');
        Route::get('/editsong/{music}', [AdminController::class, 'edit_song'])->name('edit');
        Route::put('/update/{music}', [AdminController::class, 'update_song'])->name('update');
        Route::delete('/destroy/{music}', [AdminController::class, 'destroy_song'])->name('destroy');
    });

    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
