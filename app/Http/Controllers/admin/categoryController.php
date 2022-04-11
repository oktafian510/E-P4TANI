<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'CATEGORY';
        $menu = 'Product';
        $datas = categorie::all();
        return view('admin.category.index', compact(
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
        $title = 'CATEGORY';
        $menu = 'Product';
        $model = new categorie;
        return view('admin.category.create', compact(
            'model',
            'title',
            'menu'
        ));
        // $model->name = "okta1";
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
        $model = new categorie;
        $model->name = $request->name;
        $model->description = $request->description;
        $model->save();
        return redirect('adminCategory');
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
        $model = categorie::find($id);
        return view('admin.category.update', compact(
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
        $model = categorie::find($id);
        $model->name = $request->name;
        $model->description = $request->description;
        $model->save();
        return redirect('adminCategory');
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
        $model = categorie::find($id);
        $model->delete();
        return redirect('adminCategory');
    }
}
