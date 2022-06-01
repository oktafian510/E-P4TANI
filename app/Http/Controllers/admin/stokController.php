<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\stock;
use Illuminate\Http\Request;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'STOCKS';
        $menu = 'Product';
        $datas = stock::all();
        return view('admin.stock.index', compact(
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
        $title = 'STOCKS';
        $menu = 'Product';
        $code = product::all();
        $model = new stock;
        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
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
        $model = new stock;
        $model->code = $request->code;
        $model->size = $request->size;
        $model->stock = $request->stock;
        $model->price = $request->price;
        $model->save();
        return redirect('adminStock');
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
        $product = product::find($id);
        $title = 'STOCKS';
        $menu = 'Product';
        $code = product::all();
        $model = new stock;
        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
            'product',
            'menu'
        ));
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
        $title = "STOCKS";
        $menu = "page";
        $model = stock::find($id);
        return view('admin.stock.update', compact(
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
        $model = stock::find($id);
        $model->code = $request->code;
        $model->size = $request->size;
        $model->stock = $request->stock;
        $model->price = $request->price;
        $model->save();
        return redirect('adminStock');
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
        $model = stock::find($id);
        $model->delete();
        return redirect('adminStock');
    }
}
