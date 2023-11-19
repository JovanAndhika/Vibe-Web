<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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


// Before Login
Route::group(['middleware' => 'guest'], function () {
    // home
    Route::get('/', function () {
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
Route::group(['middleware' => 'auth'], function () {
    // role user
    Route::group(['middleware' => 'user', 'prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/discover', [UserController::class, 'search'])->name('search');
        Route::get('/nowPlaying', [UserController::class, 'nowPlaying'])->name('nowPlaying');
        Route::get('/history', [UserController::class, 'history'])->name('history');
        Route::get('/library', [UserController::class, 'library'])->name('library');

        // Search
        //JAZZ
        Route::post('/search/jazz', [UserController::class, 'jazz'])->name('jazz');
        //POP
        Route::post('/search/pop', [UserController::class, 'pop'])->name('pop');
        //DANGDUT
        Route::post('/search/dangdut', [UserController::class, 'dangdut'])->name('dangdut');
        //KPOP
        Route::post('/search/kpop', [UserController::class, 'kpop'])->name('kpop');
        //ROCK
        Route::post('/search/rock', [UserController::class, 'rock'])->name('rock');
        //CLASSICAL
        Route::post('/search/classical', [UserController::class, 'classical'])->name('classical');
        //DANCE
        Route::post('/search/dance', [UserController::class, 'dance'])->name('dance');
        //PONK
        Route::post('/search/ponk', [UserController::class, 'ponk'])->name('ponk');
    });

    // role admin
    Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/addsong', [AdminController::class, 'add_song'])->name('add');
        Route::post('/store', [AdminController::class, 'store_song'])->name('store');
        Route::get('/editsong/{music}', [AdminController::class, 'edit_song'])->name('edit');
        Route::put('/update/{music}', [AdminController::class, 'update_song'])->name('update');
        Route::delete('/destroy/{music}', [AdminController::class, 'destroy_song'])->name('destroy');
        //VIEW USER
        Route::get('/viewuser', [AdminController::class, 'view_user'])->name('viewuser');
        Route::get('/viewadmin', [AdminController::class, 'view_admin'])->name('viewadmin');
        //DEACTIVATE
        Route::post('/deactivateuser/{user}', [AdminController::class, 'deactivate_user'])->name('deactivateuser');
        Route::post('/deactivateadmin/{user}', [AdminController::class, 'deactivate_admin'])->name('deactivateadmin');
        //REACTIVATE
        Route::post('/reactivateuser/{user}', [AdminController::class, 'reactivate_user'])->name('reactivateuser');
        Route::post('/reactivateadmin/{user}', [AdminController::class, 'reactivate_admin'])->name('reactivateadmin');
    });

    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});