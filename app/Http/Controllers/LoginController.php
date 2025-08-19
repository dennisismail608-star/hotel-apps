<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' =>  'required'
        ]);
        // jika login berhasil
        if (auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }
        return back()->withError([
            'email' => 'email atau password salah'
        ])->withinput();
    }
}
