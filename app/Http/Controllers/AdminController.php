<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
        dd($request);

        $data = $request->validate([
            'file_path' => 'nullable',
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable'
        ]);



        if ($request->hasFile('chfile')) {
            $destinationPath = 'listofsongs';
            $files = $request->file('chfile'); // will get files


            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->store($destinationPath, $file_name); // store files to destination folder
        }

            //WRITE TO DATABASE
            $data = new Admin();
            $data->title = $request->title;
            $data->artist = $request->artist;
            $data->genre = $request->genre;
            $data->file_path = $request->chfile;
            $data->release_date = $request->release_date;
            $data->save();
        


        return redirect(route('admin.add'));
    }
}
