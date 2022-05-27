<?php

namespace App\Http\Controllers\akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index()
    {

        return view('akun.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'password' => 'required|min:8|max:255'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->status === 'admin') {
                return redirect()->intended('/adminProduct');
            }
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!!!');
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
