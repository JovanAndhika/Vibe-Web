<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        return view('user.search', [
            "title" => "search",
            "active" => "search",
            "musics" => $musics
        ]);
    }

    public function nowPlaying()
    {

        // cari music
        $music = Music::find(request('music_id'));

        // ------------------NGETRACK HISTORY------------------------

        if($music){
            // $currentHari = Carbon::now()->format('D');
            // $currentTanggal = Carbon::now()->format('d');
            // $currentBulan = Carbon::now()->format('M');
            // $currentTahun = Carbon::now()->format('Y');
            // $currentWaktu = Carbon::now()->format('H:i:s');

            $currentDay = Carbon::now()->format('D');
            $currentDateTime = Carbon::now()->format('Y-m-d H:i:s');
            
            History::create([
                'music_id' => $music->id,
                'user_id' => auth()->user()->id,
                'played_at' => $currentDateTime,
                'played_day' => $currentDay

                // 'played_hari' => $currentHari,
                // 'played_tanggal' => $currentTanggal,
                // 'played_bulan' => $currentBulan,
                // 'played_tahun' => $currentTahun,
                // 'played_waktu' => $currentWaktu
            ]);
        }   

        // ------------------------------------------------------------


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
        $history = History::where("user_id",auth()->user()->id)->get();
        $hasil = [] ;
        foreach ($history as $isi) {
            $playedDate = Carbon::parse($isi->played_at)->format('Y-m-d');
            $playedTime = Carbon::parse($isi->played_at)->format('H:i:s');
            $hasil[$playedDate] [$playedTime]= $isi;
        
        }
        return view('user.history', [
            "title" => "history",
            "active" => "history",
            "histories" => $hasil
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
