<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'PRODUCTS';
        $menu = 'Product';
        $datas = product::all();
        return view('admin.product.index', compact(
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
        $title = 'PRODUCTS';
        $menu = 'Product';
        $category = categorie::all();
        $model = new product;
        return view('admin.product.create', compact(
            'model',
            'title',
            'category',
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
        // return $request->file('image')->store('post-images');
        $model = new product;
        $model->code = $request->code;
        $model->category = $request->category;
        $model->nameProduct = $request->nameProduct;
        $model->description = $request->description;
        $model->priceRange = $request->priceRange;
        // $model->image = $request->image;
        $model->image = $request->file('image')->store('post-images');
        $model->save();
        return redirect('adminProduct');
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
        $title = "PRODUCTS";
        $menu = "page";
        $model = product::find($id);
        return view('admin.product.update', compact(
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
        $model = product::find($id);
        $model->code = $request->code;
        $model->category = $request->category;
        $model->nameProduct = $request->nameProduct;
        $model->description = $request->description;
        $model->priceRange = $request->priceRange;
        if ($request->file('image')) {
            $model->image = $request->file('image')->store('post-images');
        } else {
            $model->image = $request->image1;
        }
        $model->save();
        return redirect('adminProduct');
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
        $model = product::find($id);
        $model->delete();
        return redirect('adminProduct');
    }
}
