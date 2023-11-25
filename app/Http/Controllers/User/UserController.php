<?php

namespace App\Http\Controllers\User;
use Carbon\Carbon;
use App\Models\Music;
use App\Models\History;
use App\Models\Newgenre;
use App\Models\Playlist;
use App\Models\Discovery;
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
        // BUAT NORMAL SEARCH
        $musics = collect([]);

        // Pastikan ada request 'artist' atau 'title' dan keduanya tidak kosong
        if (request()->filled('artist') || request()->filled('title')) {
            $musics = Music::latest()->filter(request(['artist', 'title']))->get();
        }

        //BUAT DISCOVERY
        $music_discoveries = Music::all();
        $discovers = Discovery::all();

        $songs = collect([]);
        foreach ($music_discoveries as $m) {
            $songs->put($m->id, ['id'=> $m->id, 'title' => $m->title, 'artist' => $m->artist, 'genre' => $m->genre, 'file_path' => $m->file_path, 'release_date' => $m->release_date, 'category_id' => $m->category_id]);
        }
        
        $collect_all_music = collect([]);
        foreach($discovers as $d){
            $temp = $songs->where('category_id', $d->id);
            $collect_all_music->put($d->id, $temp);
        }


        //BUAT NEWGENRE
        $newgenres = Newgenre::all();
        
    
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
        // cek apakah request playlist atau music
        if (request()->filled('playlist_id')) {
            // jika request adalah playlist
            $playlist = Playlist::find(request('playlist_id'));
            $musics = $playlist->musics;

            // simpan ke history untuk lagu pertama
            if ($musics->first())
            {
                $this->storeHistory($musics->first()->id);
            }

            return view('user.nowPlaying', [
                "title" => "nowPlaying",
                "active" => "nowPlaying",
                "playlist" => $playlist,
                "musics" => $musics
            ]);
        } else {
            // jika request adalah music
            $music = Music::find(request('music_id'));

            // simpan ke history
            if ($music)
            {
                $this->storeHistory($music->id);
            }

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
        // fetch semua history yang dimiliki user
        $history = History::with('music')->where("user_id", auth()->user()->id)->latest()->get();
        $hasil = [];

        // cek semua history
        foreach ($history as $isi) {
            // mengakses tanggal dan waktu
            $playedDate = Carbon::parse($isi->created_at)->format('l, d M Y');
            $playedTime = Carbon::parse($isi->created_at)->format('H:i:s');

            // menyimpan di array berdasarkan tanggal dan waktu
            $hasil[$playedDate][$playedTime] = $isi;
        }

        return view('user.history', [
            "title" => "history",
            "active" => "history",
            "histories" => $hasil
        ]);
    }

    // disarankan mengakses pakai ajax/UserController saja
    public function storeHistory($music_id)
    {
        // cari music
        $music = Music::find($music_id);

        // jika music ditemukan
        if ($music) {
            // disimpan ke history
            History::create([
                'music_id' => $music->id,
                'user_id' => auth()->user()->id
            ]);
        }
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
