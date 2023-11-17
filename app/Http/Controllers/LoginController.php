<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            "title" => "login"
        ]);
    }

    public function authenticate(Request $request)
    {
        // validasi data
        $validatedData = $request->validate([
            'email' => 'required|email:dns|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        // cek apakah email dan password benar
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();
            
            // mengecek apakah adalah admin
            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin');
            }
            else
            {
                return redirect()->intended('/user');
            }
        }

        return back()->with('error', 'Email or password is wrong');
    }

    public function logout(Request $request)
    {
        // logout
        Auth::logout();

        // memperbaharui session
        $request->session()->invalidate();
        request()->session()->regenerateToken();

        // TODO: pindahkan ke index
        // kembali ke default
        return redirect()->route('login')->with('success', 'Logout successfull');
    }
}
