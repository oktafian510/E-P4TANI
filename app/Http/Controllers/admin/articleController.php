<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'ARTICLE';
        $menu = 'page';
        $datas = article::all();
        return view('admin.article.index', compact(
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
        $title = 'ARTICLE';
        $menu = 'page';
        $category = categorie::all();
        $model = new article;
        return view('admin.article.create', compact(
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
        $category1 = $request->category;
        $category = implode(",", $category1);

        // return $category;
        $model = new article;
        $model->title = $request->title;
        $model->description = $request->description;
        $model->writer = $request->writer;
        $model->category = $category;
        $model->image = $request->file('image')->store('post-images/article');
        $model->save();
        return redirect('adminArticle');
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
        $title = "ARTICLE";
        $menu = "page";
        $model = article::find($id);
        return view('admin.article.update', compact(
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
        $model = article::find($id);
        $model->title = $request->title;
        $model->description = $request->description;
        $model->writer = $request->writer;
        $model->category = $request->category;
        if ($request->file('image')) {
            $model->image = $request->file('image')->store('post-images/article');
        } else {
            $model->image = $request->image1;
        }
        $model->save();
        return redirect('adminArticle');
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
        $model = article::find($id);
        $model->delete();
        return redirect('adminArticle');
    }
}
