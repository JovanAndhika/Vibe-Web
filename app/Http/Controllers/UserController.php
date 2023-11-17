<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home', [
            "title" => "home",
            "active" => "home",
            "musics" => Music::latest()->get()
        ]);
    }

    public function search()
    {
        $music = null;
        if(request('artist') || request('title')){
            $music = Music::latest()->filter(request(['artist', 'title'], request('search')))->get();
        }

        // filter() artinya menjalankan scopeFilter di model Music
        // mengirim parameter filter searchnya mau apa (title atau artist)
        // mengirim parameter keyword searchnya juga
        return view('user.search', [
            "title" => "search",
            "active" => "search",
            "musics" => $music
        ]);
    }

    public function nowPlaying()
    {
        $music = Music::find(request('music_id'));
        return view('user.nowPlaying', [
            "title" => "nowPlaying",
            "active" => "nowPlaying",
            "music" => $music
        ]);
    }

    public function discoverPlaylist()
    {
        return view('user.discoverPlaylist', [
            "title" => "discoverPlaylist",
            "active" => "discoverPlaylist"
        ]);
    }

    public function history()
    {
        return view('user.history', [
            "title" => "history",
            "active" => "history"
        ]);
    }

    public function library()
    {
        return view('user.library', [
            "title" => "library",
            "active" => "library"
        ]);
    }
}
