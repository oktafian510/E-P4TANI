<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\product_image;
use Illuminate\Http\Request;

class productImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $title = "PRODUCTS";
        // $menu = "page";
        // // $model = product::find($id);
        // return view('admin.product.image', compact(

        //     'title',
        //     'menu'
        // ));
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
        // return $request
        $addImage = new product_image;
        $addImage->code = $request->code;
        // // $addImage->image = $request->image;
        $addImage->image = $request->file('image')->store('post-images');
        $addImage->save();
        // return redirect('adminProduct');

        $title = "PRODUCTS";
        $menu = "page";
        $model = product::find($request->idProduct);
        $productImage = product_image::where('code', $model->code)->get();
        return view('admin.product.image', compact(
            'model',
            'title',
            'menu',
            'productImage'
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
        $title = "PRODUCTS";
        $menu = "page";
        $model = product::find($id);
        $productImage = product_image::where('code', $model->code)->get();
        return view('admin.product.image', compact(
            'model',
            'title',
            'menu',
            'productImage'
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
        $explode = explode(",", $id);
        $idImage = $explode[0];
        $code = $explode[1];
        $idProduct = $explode[2];

        $delete = product_image::find($idImage);
        $delete->delete();

        $model = product::find($idProduct);
        $title = "PRODUCTS";
        $menu = "page";
        $productImage = product_image::where('code', $code)->get();
        return view('admin.product.image', compact(
            'model',
            'title',
            'menu',
            'productImage'
        ));
    }
}
