<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Music;


class MusicController extends Controller
{
    //Controller Admin
    public function index()
    {
        return view('adminCRUD.adminHome');
    }

    public function add_song()
    {
        return view('adminCRUD.addsong');
    }


    public function store_song(Request $request)
    {
        // validasi
        $data = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'chfile' => 'required',
            'release_date' => 'required'
        ]);

        if ($request->hasFile('chfile')) {
            $destinationPath = 'listofsongs';
            $files = $request->file('chfile'); // will get files
            $path = $files->store($destinationPath); // store files to destination folder
            $data['file_path'] = $path;
        }

        // insert to database
        Music::create($data);
        return back()->with('success', 'Song has been added');
    }
}
