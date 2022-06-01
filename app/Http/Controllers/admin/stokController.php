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
        $addStock = new stock;
        $addStock->code = $request->code;
        $addStock->size = $request->size;
        $addStock->stock = $request->stock;
        $addStock->price = $request->price;
        $addStock->save();

        $product = product::find($request->idProduct);
        $title = 'STOCKS';
        $menu = 'Product';
        $code = product::all();
        $dataStock = stock::where('code', $request->code)->get();
        $model = new stock;
        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
            'product',
            'dataStock',
            'menu'
        ));
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
        $dataStock = stock::where('code', $product->code)->get();
        $model = new stock;
        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
            'product',
            'dataStock',
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
        $explode = explode(",", $id);
        $idStock = $explode[0];
        $idProduct = $explode[1];

        $product = product::find($idProduct);


        $title = "STOCKS";
        $menu = "page";
        $model = stock::find($idStock);
        return view('admin.stock.update', compact(
            'model',
            'title',
            'product',
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
        // $explode = explode(",", $id);
        // $idStock = $explode[0];
        // $code = $explode[1];
        // $idProduct = $explode[2];
        // return $request;

        $editStock = stock::find($id);
        $editStock->code = $request->code;
        $editStock->size = $request->size;
        $editStock->stock = $request->stock;
        $editStock->price = $request->price;
        $editStock->save();


        $product = product::find($request->idProduct);
        $title = 'STOCKS';
        $menu = 'Product';
        $code = product::all();
        $dataStock = stock::where('code', $request->code)->get();
        $model = new stock;


        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
            'product',
            'dataStock',
            'menu'
        ));
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


        $explode = explode(",", $id);
        $idStock = $explode[0];
        $code = $explode[1];
        $idProduct = $explode[2];

        $deleteStock = stock::find($idStock);
        $deleteStock->delete();

        $product = product::find($idProduct);
        $title = 'STOCKS';
        $menu = 'Product';
        $code = product::all();
        $dataStock = stock::where('code', $product->code)->get();
        $model = new stock;
        return view('admin.stock.create', compact(
            'model',
            'title',
            'code',
            'product',
            'dataStock',
            'menu'
        ));
    }
}
