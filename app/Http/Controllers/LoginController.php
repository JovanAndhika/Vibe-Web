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

        // cek apakah akun terdisabled atau tidak
        if (User::where('email', $validatedData['email'])->first()->activation == 0) {
            return back()->with('error', 'Your account is disabled. Please contact the administrator');
        }

        // cek apakah email dan password benar
        if (Auth::attempt($validatedData)) {
            // generate session
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
        else
        {
            return back()->with('error', 'Email or password is incorrect');
        }
    }

    public function logout(Request $request)
    {
        // logout
        Auth::logout();

        // memperbaharui session
        $request->session()->invalidate();
        request()->session()->regenerateToken();

        // kembali ke default
        return redirect()->route('login')->with('success', 'Logout successfull');
    }
}
