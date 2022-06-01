<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\User;
use Illuminate\Http\Request;

class profilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'PROFIL';
        $about = about::limit(1)->get();
        // return $profilUser;
        return view('view.profil.index', compact([
            'title',
            'about',

        ]));
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
        $title = 'PROFIL';
        $about = about::limit(1)->get();
        $profilUser = User::find($id);
        // return $profilUser;
        return view('view.profil.index', compact([
            'title',
            'about',
            'profilUser'

        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'PROFIL';
        $about = about::limit(1)->get();
        $profilUser = User::find($id);
        // return $profilUser;
        return view('view.profil.update', compact([
            'title',
            'about',
            'profilUser'

        ]));
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

        //
        $model = User::find($id);
        $model->name = $request->name;
        $model->username  = $request->username;
        $model->email  = $request->email;
        $model->password  = auth()->user()->password;
        $model->access  = auth()->user()->access;
        $model->address  = $request->address;
        $model->city  = $request->city;
        $model->province  = $request->province;
        $model->gender  = $request->gender;
        $model->hp  = $request->hp;
        if ($request->file('image')) {
            $model->image = $request->file('image')->store('post-images/profil');
        } else {
            $model->image = $request->image1;
        }
        $model->status  = $request->status;
        $model->save();
        return redirect('profilUser/');
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
