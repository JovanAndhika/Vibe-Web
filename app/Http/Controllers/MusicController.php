<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    //Controller Admin
    public function index()
    {
        $musics = Music::all();
        return view('adminCRUD.adminHome', ['musics' => $musics]);
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
            'chfile' => 'required|file|max:25000',
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


    public function edit_song(Music $music){
        
        return view('adminCRUD.editsong', ['music' => $music]);
    }

    public function update_song(Music $music, Request $request){
        // validasi
        $data = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'release_date' => 'required'
        ]);

        if($request->file('chfile')){
            if($request->oldsong){
                $request->validate(['chfile' => 'required|file|max:25000']);
                Storage::delete($request->oldsong);
            }
            $destinationPath = 'listofsongs';
            $files = $request->file('chfile'); // will get files
            $path = $files->store($destinationPath); // store files to destination folder
            $data['file_path'] = $path;
        }

        $music->update($data);
        return redirect(route('admin.edit', ['music' => $music]))->with('success', 'edit confirmed');
    }
}
