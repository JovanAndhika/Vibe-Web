<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        return view('index', [
            'musics' => Music::all()
        ]);
    }
}
