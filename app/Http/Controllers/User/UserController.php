<?php

namespace App\Http\Controllers\User;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home', [
            "title" => "home",
            "active" => "home",
            "musics" => Music::get()
        ]);
    }

    public function search()
    {
        $musics = collect([]);

        // Pastikan ada request 'artist' atau 'title' dan keduanya tidak kosong
        if (request()->filled('artist') || request()->filled('title')) {
            $musics = Music::filter(request(['artist', 'title']))->get();
        }

        return view('user.search', [
            "title" => "search",
            "active" => "search",
            "musics" => $musics
        ]);
    }

    public function nowPlaying()
    {
        // cek apakah request playlist atau music
        if (request()->filled('playlist_id')) {
            // jika request adalah playlist
            $playlist = Playlist::find(request('playlist_id'));
            $musics = $playlist->musics;
            return view('user.nowPlaying', [
                "title" => "nowPlaying",
                "active" => "nowPlaying",
                "playlist" => $playlist,
                "musics" => $musics
            ]);
        }
        else
        {
            // jika request adalah music
            $music = Music::find(request('music_id'));
            return view('user.nowPlaying', [
                "title" => "nowPlaying",
                "active" => "nowPlaying",
                "music" => $music
            ]);
        }
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

    // genre search
    public function jazz()
    {
        $jazz = DB::table('music')->where('genre', 'Jazz')->get();

        return view('user.searchResult.jazzResult', ['jazz' => $jazz])
            ->with('genreJazz', 'genreJazz searched');
    }

    public function pop()
    {
        $pop = DB::table('music')->where('genre', 'Pop')->get();

        return view('user.searchResult.popResult', ['pop' => $pop])
            ->with('genrePop', 'genrePop searched');
    }

    public function dangdut()
    {
        $song = DB::table('music')->where('genre', 'Dangdut')->get();

        return view('user.searchResult.dangdutResult', ['dangdut' => $song])
            ->with('genreDangdut', 'genreDangdut searched');
    }

    public function kpop()
    {
        $song = DB::table('music')->where('genre', 'Kpop')->get();

        return view('user.searchResult.kpopResult', ['pop' => $song])
            ->with('genreKpop', 'genreKpop searched');
    }

    public function rock()
    {
        $song = DB::table('music')->where('genre', 'Rock')->get();

        return view('user.searchResult.rockResult', ['rock' => $song])
            ->with('genreRock', 'genreRock searched');
    }

    public function classical()
    {
        $song = DB::table('music')->where('genre', 'Classical')->get();

        return view('user.searchResult.classicalResult', ['classical' => $song])
            ->with('genreClassical', 'genreClassical searched');
    }

    public function dance()
    {
        $song = DB::table('music')->where('genre', 'Dance')->get();

        return view('user.searchResult.danceResult', ['dance' => $song])
            ->with('genreDance', 'genreDance searched');
    }

    public function ponk()
    {
        $song = DB::table('music')->where('genre', 'Ponk')->get();

        return view('user.searchResult.ponkResult', ['ponk' => $song])
            ->with('genrePonk', 'genrePonk searched');
    }
}
