<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\poster;
use Illuminate\Http\Request;

class posterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'POSTER';
        $menu = 'page';
        $datas = poster::all();
        return view('admin.poster.index', compact(
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
        $title = 'POSTER';
        $menu = 'page';
        $model = new poster;
        return view('admin.poster.create', compact(
            'model',
            'title',
            'menu'
        ));
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
        $model = new poster;
        $model->title = $request->title;
        $model->description = $request->description;
        // $model->image = $request->image;
        $model->image = $request->file('image')->store('post-images/poster');

        $model->save();
        return redirect('adminPoster');
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
        $title = "POSTER";
        $menu = "page";
        $model = poster::find($id);
        return view('admin.poster.update', compact(
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
        $model = poster::find($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->image = $request->image;
        $model->save();
        return redirect('adminPoster');
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
        $model = poster::find($id);
        $model->delete();
        return redirect('adminPoster');
    }
}
