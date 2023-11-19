<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        // cek apakah account disabled
        $user = User::where('email', $validatedData['email'])->first();
        if (!$user) {
            return back()->with('error', 'Login Failed!');
        }

        if ($user->activation == 0) {
            return back()->with('error', 'Account disabled! Ask admin to activate your account');
        }

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
