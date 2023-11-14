<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //Controller Admin
    public function index()
    {
        return view('adminCRUD.admin');
    }

    public function add_song()
    {
        return view('adminCRUD.addsong');
    }
}
