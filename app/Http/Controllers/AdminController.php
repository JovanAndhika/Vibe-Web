<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

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
        $data = $request->validate([
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'release_date' => 'required'
        ]);

        $newSong = Admin::create($data);
        return redirect(route('admin.add'));
    }
}
