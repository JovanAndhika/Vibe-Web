<?php

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

Route::get('/home', function () {
    return view('home', [
        "active" => 'home'
    ]);
});

Route::get('/testing', [MusicController::class, 'index']);

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/admin', [MusicController::class, 'index'])->name('admin.index');
Route::get('/admin/addsong', [MusicController::class, 'add_song'])->name('admin.add');
Route::post('/admin/store', [MusicController::class, 'store_song'])->name('admin.store');
Route::get('/admin/editsong/{music}', [MusicController::class, 'edit_song'])->name('admin.edit');
Route::put('/admin/update/{music}', [MusicController::class, 'update_song'])->name('admin.update');
Route::delete('admin/destroy/{music}', [MusicController::class, 'destroy_song'])->name('admin.destroy');