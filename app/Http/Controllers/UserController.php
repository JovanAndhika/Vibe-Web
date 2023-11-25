<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $musics = collect([]);


        // Pastikan ada request 'artist' atau 'title' dan keduanya tidak kosong
        if (request()->filled('artist') || request()->filled('title')) {
            $musics = Music::latest()->filter(request(['artist', 'title']))->get();
        }

        //BUAT DISCOVERY
        $music_discoveries = Music::all();
        $discovers = DB::table('discoveries')
            ->get();

        $songs = collect([]);
        foreach ($music_discoveries as $m) {
            $songs->put($m->id, ['id'=> $m->id, 'title' => $m->title, 'artist' => $m->artist, 'genre' => $m->genre, 'file_path' => $m->file_path, 'release_date' => $m->release_date, 'category_id' => $m->category_id]);
        }
        

        $collect_all_music = collect([]);
        foreach($discovers as $d){
            $temp = $songs->where('category_id', $d->id);
            $collect_all_music->put($d->id, $temp);
        }
    

        return view('user.search', [
            "title" => "search",
            "active" => "search",
            "musics" => $musics,
            "discovers" => $discovers,
            "music_discoveries" => $music_discoveries,
            "collect_all_music" => $collect_all_music
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

        return view('user.searchResult.kpopResult', ['kpop' => $song])
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
