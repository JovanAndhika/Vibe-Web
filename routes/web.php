<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicController;

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

// Before Login
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
});

// User
Route::group(['middleware' => 'auth'], function(){
    // user
    Route::group(['middleware' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
        // TODO: buat user controller
        Route::get('/', function () { return view('user.temp_index'); })->name('index');
    });

    // admin
    Route::group(['middleware' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [MusicController::class, 'index'])->name('index');
        Route::get('/addsong', [MusicController::class, 'add_song'])->name('add');
        Route::post('/store', [MusicController::class, 'store_song'])->name('store');
        Route::get('/editsong/{music}', [MusicController::class, 'edit_song'])->name('edit');
        Route::put('/update/{music}', [MusicController::class, 'update_song'])->name('update');
        Route::delete('/destroy/{music}', [MusicController::class, 'destroy_song'])->name('destroy');
    });

    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
