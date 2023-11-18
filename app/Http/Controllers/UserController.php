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
    public function index(){

        $musics = Music::all();
        return view('home', ['musics'=>$musics, 'active'=>'home']);
    }

    public function search(){
        return view('search', ['active' => 'search']);
    }

    public function genreJazz(){
        $jazz = DB::table('music')->where('genre', 'Jazz')->get();
        return redirect(route('admin.search'))
        ->with('jazz', $jazz)
        ->with('genreJazz', 'jazz confirmed');
    }

    public function genrePop(){
        $pop = DB::table('music')->where('genre', 'Pop')->get();
        return redirect(route('user.search', ['pop' => $pop]))->with('genrePop', 'genrePop searched');
    }

    public function playingNow(){
        // <audio src="path/to/song.mp3" controls autoplay></audio>
        // UNTUK MEMBUAT CSS TOMBOL PLAY WORKS
    }

}
