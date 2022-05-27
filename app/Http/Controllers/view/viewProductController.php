<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\poster;
use App\Models\product;
use App\Models\product_image;
use App\Models\stock;
use Illuminate\Http\Request;

class viewProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'PRODUCT';
        $poster = poster::all();
        $about = about::limit(1)->get();
        $product = product::all();
        $stock = stock::all();
        return view('view.product.index', compact([
            'title',
            'product',
            'about',
            'stock',
            'poster'
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
        $title = 'PRODUCT';
        $about = about::limit(1)->get();
        $product = product::find($id);
        $stock = stock::where('code', $product->code)->get();
        $product_image = product_image::where('code', $product->code)->get();
        // return $product . "<br><br><br>" . $stock;
        return view('view.product.show', compact([
            'title',
            'product',
            'about',
            'stock',
            'product_image'

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
        $explode = explode(",", $id);
        $code = $explode[0];
        $size = $explode[1];
        // return $size . $code;
        $title = 'PRODUCT';
        $about = about::limit(1)->get();
        $products = product::where('code', $code)->get();
        $product = $products[0];
        $product_image = product_image::where('code', $code)->get();
        $stock = stock::where('code', $code)->get();
        $stockActive = stock::where('code', $code)->where('size', $size)->get();
        $stockActived = $stockActive[0];
        // return $stock;
        // return $product . "<br><br><br>" . $stockActive . "<br><br><br>" . $stockActived;
        return view('view.product.detail', compact([
            'title',
            'product',
            'about',
            'size',
            'stockActived',
            'product_image',
            'stock'
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
