<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\article;
use App\Models\about;
use Illuminate\Http\Request;

class viewArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hide = 'show';
        $title = 'ARTICLE';
        $categorie = categorie::all();
        $about = about::limit(1)->get();
        $article = article::all();
        $articlePost = article::limit(1)->get();
        return view('view.article.index', compact([
            'hide',
            'title',
            'articlePost',
            'about',
            'categorie',
            'article'

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
    public function show($category)
    {
        //
        $title = 'ARTICLE';
        $hide = 'hide';
        $categorie = categorie::all();
        $about = about::limit(1)->get();
        $article = article::where('category', $category)->get();
        $articlePost = article::limit(1)->get();
        return view('view.article.index', compact([
            'hide',
            'title',
            'articlePost',
            'about',
            'categorie',
            'article'
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
        $hide = 'show';
        $title = 'ARTICLE';
        $categorie = categorie::all();
        $about = about::limit(1)->get();
        $article = article::find($id);
        return view('view.article.show', compact([
            'hide',
            'title',
            'about',
            'categorie',
            'article'

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
