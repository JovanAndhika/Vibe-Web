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


    public function store_song(Request $request){

    
        $data = $request->validate([
            'file_path' => 'image|mimes:jpg,png',
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'release_date' => 'required',
            'updated_at' => 'nullable',
            'created_at' => 'nullable'
        ]);


        $file_name = '';

        if ($request->hasFile('choose')) {
            $destinationPath = 'storage/app/public/listofsongs/';
            $files = $request->file('choose'); // will get all files
        
           
            $file_name = $files->getClientOriginalName(); //Get file original name
            $files->move($destinationPath , $file_name); // move files to destination folder
        }

        //WRITE TO DATABASE
        $data = new Admin();
        $data->title = $request->title;
        $data->artist = $request->artist;
        $data->genre = $request->genre;
        $data->file_path = 'storage/app/public/listofsongs/'.$file_name.'.mp3';
        $data->release_date = $request->release_date;
        $data->save();


        return redirect(route('admin.add'));
    }
}
