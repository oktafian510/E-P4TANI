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
        $request->validate([
            'username' => ['required', 'min:3', 'max:255'],
            'password' => 'required|min:8|max:255'
        ]);

        return $request->all();
    }
}
