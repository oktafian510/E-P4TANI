<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'ABOUT';
        $menu = 'page';
        $datas = about::all();
        return view('admin.about.index', compact(
            'datas',
            'title',
            'menu'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'ABOUT';
        $menu = 'page';
        $model = new about;
        return view('admin.about.create', compact(
            'model',
            'title',
            'menu'
        ));
        // $model->company = "okta1";
        // $model->description = "saya pintar";
        // if ($model->save())
        //     return "berhasil";
        // else
        //     return "gagal";

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
        $model = new about;
        $model->company = $request->company;
        $model->description = $request->description;
        $model->email = $request->email;
        $model->fb = $request->fb;
        $model->hp = $request->hp;
        $model->ig = $request->ig;
        $model->yt = $request->yt;
        $model->image = $request->image;
        $model->save();
        return redirect('adminAbout');
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
        $title = "FAQ";
        $menu = "page";
        $model = about::find($id);
        return view('admin.about.update', compact(
            'model',
            'title',
            'menu'
        ));
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
        $model = about::find($id);
        $model->company = $request->company;
        $model->description = $request->description;
        $model->email = $request->email;
        $model->fb = $request->fb;
        $model->hp = $request->hp;
        $model->ig = $request->ig;
        $model->yt = $request->yt;
        $model->image = $request->image;
        $model->save();
        return redirect('adminAbout');
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
        $model = about::find($id);
        $model->delete();
        return redirect('adminAbout');
    }
}
