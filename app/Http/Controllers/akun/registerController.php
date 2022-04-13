<?php

namespace App\Http\Controllers\akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    //
    public function index()
    {
        return view('akun.register');
    }
    // public function store(Request $request)
    // {
    //     // Validate and store the blog post...

    //     return $request->validate(
    //         [
    //             'name' => 'required|max:255',
    //             'hp' => 'required|max:255',
    //             'username' => ['required', 'min:3', 'max:255', 'unique:users'],
    //             'password' => 'required|min:3|max:255'
    //         ]
    //     );
    //     // dd('berhasil');
    //     // return $request()->all();
    // }
}
