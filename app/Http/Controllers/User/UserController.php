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
            "musics" => Music::orderBy('release_date', 'desc')->paginate(10)
        ]);
    }

    public function search()
    {
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

        $allNewGenres = Newgenre::all();


        return view('user.search', [
            "title" => "search",
            "active" => "search",
            "musics" => Music::filter(request('keyword'), request('searchBy'))->orderBy('release_date', 'desc')->paginate(10)->withQueryString(),
            "discovers" => $discovers,
            "music_discoveries" => $music_discoveries,
            "collect_all_music" => $collect_all_music,
            "newgenres" => $allNewGenres
        ])->withInput(request()->all());
    }


    public function nowPlaying()
    {
        // cek apakah request playlist atau music
        if (request()->filled('playlist_id')) {
            // jika request adalah playlist
            $playlist = Playlist::where('id', request('playlist_id'))->where('user_id', auth()->user()->id)->first();

            // jika playlist tidak ditemukan, redirect ke nowPlaying tanpa request
            if (!$playlist) {
                return redirect()->route('user.nowPlaying');
            }

            // fetch music dan simpan history jika ada ditemukan playlist
            $musics = $playlist->musics;

            // fetch music yang diplay sekarang + simpan ke history
            $index = request('index');
            if ($index < 0) {
                $index = 0;
            }
            if ($index >= $musics->count()) {
                $index = $musics->count() - 1;
            }
            $music = $musics->skip($index)->first();
            $this->storeHistory($musics->first()->id);

            return view('user.nowPlaying', [
                "title" => "nowPlaying",
                "active" => "nowPlaying",
                "playlist" => $playlist,
                "musics" => $musics,
                "selected" => $music,
            ]);
        } else {
            // jika tidak ada request music (kosong)
            if (!request()->filled('music_id')) 
            {
                // mengambil music paling terakhir history
                $last_music = History::where('user_id', auth()->user()->id)->latest()->first();
                if ($last_music)
                {
                    $music = $last_music->music;
                }
                else
                {
                    // jika tidak ditemukan, maka kosong
                    $music = null;
                }
            }
            else
            {
                // jika request adalah music
                $music = Music::find(request('music_id'));
            }

            // simpan ke history jika ada music
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


    public function newgenre(Newgenre $newgenre){

        $value_newgenre = $newgenre->new_genre;
       
        $data = DB::table('music')
        ->join('newgenres', 'music.genre', '=', 'newgenres.new_genre')
        ->where('music.genre', $value_newgenre)
        ->get();

        return view('user.searchResult.newgenreResult', ['newgenre' => $newgenre, 'songs' => $data]);
    }


}
