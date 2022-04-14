<?php

namespace App\Http\Controllers\akun;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('akun.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();

        $validateRegister = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'password' => 'required|min:8|max:255'
            ]
        );

        $validateRegister['password'] = Hash::make($validateRegister['password']);

        $model = new User;
        $model->name = $validateRegister['name'];
        $model->email = $validateRegister['email'];
        $model->hp = '-';
        $model->access = '-';
        $model->address = '-';
        $model->city = '-';
        $model->province = '-';
        $model->gender = '-';
        $model->image = '-';
        $model->status = '-';
        $model->username = $validateRegister['username'];
        $model->password = $validateRegister['password'];
        $model->save();
        return redirect('login')->with('success', 'registration successfull!! please login');

        // $pass = $validateRegister('password');
        // return $pass;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
