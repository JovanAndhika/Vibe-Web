<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('regist', [
            "title" => "regist"
        ]);
    }

    public function store(Request $request)
    {
        // validasi data
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email:dns|max:255',
            'password' => 'required|min:8|max:255',
            'date_of_birth' => 'required|date',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // jika ada file
        if ($request->hasFile('icon')) {
            $validatedData['icon'] = $request->file('icon')->store('icons');
        }

        //enkripsi password sehingga tidak bisa ditebak
        $validatedData['password'] = Hash::make($validatedData['password']);

        // simpan data ke database
        $user = User::create($validatedData);

        Playlist::create([
            'user_id' => $user->id,
            'name' => 'liked songs',
        ]);
        
        // return ke page login
        return redirect()->route('login')->with('success', 'Register successfull! Please Login');

     
    }
}
