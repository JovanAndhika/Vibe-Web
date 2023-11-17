<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home', [
            "title" => "home",
            "active" => "home"
        ]);
    }

    public function search()
    {
        return view('user.search', [
            "title" => "search",
            "active" => "search"
        ]);
    }

    public function nowPlaying()
    {
        return view('user.nowPlaying', [
            "title" => "nowPlaying",
            "active" => "nowPlaying"
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
