<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {

        $musics = Music::all();
        return view('home', ['musics' => $musics, 'active' => 'home']);
    }

    public function playingNow(Music $music)
    {
        return view('nowPlaying', ['music' => $music])
        ->with('playing', 'song is now playing')
        ->with('active', 'nowPlaying');
    }


    //SEARCH
    public function search()
    {
        return view('search', ['active' => 'search']);
    }

    public function jazz()
    {
        $jazz = DB::table('music')->where('genre', 'Jazz')->get();

        return view('searchResult.jazzResult', ['jazz' => $jazz])
            ->with('genreJazz', 'genreJazz searched');
    }

    public function pop()
    {
        $pop = DB::table('music')->where('genre', 'Pop')->get();

        return view('searchResult.popResult', ['pop' => $pop])
            ->with('genrePop', 'genrePop searched');
    }

    public function dangdut()
    {
        $song = DB::table('music')->where('genre', 'Dangdut')->get();

        return view('searchResult.dangdutResult', ['dangdut' => $song])
            ->with('genreDangdut', 'genreDangdut searched');
    }

    public function kpop()
    {
        $song = DB::table('music')->where('genre', 'Kpop')->get();

        return view('searchResult.kpopResult', ['pop' => $song])
            ->with('genreKpop', 'genreKpop searched');
    }

    public function rock()
    {
        $song = DB::table('music')->where('genre', 'Rock')->get();

        return view('searchResult.rockResult', ['rock' => $song])
            ->with('genreRock', 'genreRock searched');
    }

    public function classical()
    {
        $song = DB::table('music')->where('genre', 'Classical')->get();

        return view('searchResult.classicalResult', ['classical' => $song])
            ->with('genreClassical', 'genreClassical searched');
    }

    public function dance()
    {
        $song = DB::table('music')->where('genre', 'Dance')->get();

        return view('searchResult.danceResult', ['dance' => $song])
            ->with('genreDance', 'genreDance searched');
    }

    public function ponk()
    {
        $song = DB::table('music')->where('genre', 'Ponk')->get();

        return view('searchResult.ponkResult', ['ponk' => $song])
            ->with('genrePonk', 'genrePonk searched');
    }

    
}
