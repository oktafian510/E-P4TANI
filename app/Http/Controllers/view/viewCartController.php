<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\cart;
use Illuminate\Http\Request;

class viewCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cart = cart::all();

        return $cart;
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
        $model = new cart;
        $model->code = $request->code;
        $model->quantity = $request->quantity;
        $model->price = $request->price;
        $model->id_users = $request->id_users;
        $model->nameProduct = $request->nameProduct;
        $model->size = $request->size;
        $model->status = "ready";
        $model->image = $request->image;
        $model->save();
        return redirect('product/' . $request->code . ',' . $request->size . '/edit');
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
        $title = 'CART';
        $about = about::limit(1)->get();
        $cart = cart::where('id_Users', $id)->get();
        // return $cart;
        return view('view.cart.index', compact([
            'title',
            'about',
            'cart'

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
        //
        $title = 'CART';
        $about = about::limit(1)->get();
        $cart = cart::find($id);

        // return $cart;

        // return view('view.cart.show', compact([
        //     'title',
        //     'about',
        //     'cart'

        // ]));
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
        $model = cart::find($id);
        $model->delete();
        return redirect('cart/' . auth()->user()->id);
    }
}
