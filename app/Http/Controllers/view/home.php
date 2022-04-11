<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\article;
use App\Models\faq;
use App\Models\landing_page;
use App\Models\member;
use App\Models\tb_products;
use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function index()
    {
    return view('view.index');
    }
    public function home()
    {
        $landing_pages = landing_page::all();
        $article = article::all();
        $catalog = tb_products::all();
        $about = about::all();
        return view('view.home', compact(
            'landing_pages',
            'article',
            'catalog',
            'about'

        ));
    }
    public function article()
    {
        $article = article::all();
        return view('view.article', compact(
            'article'

        ));
    }
    public function catalog()
    {
        $catalog = tb_products::all();
        return view('view.catalog', compact(
            'catalog'

        ));
    }
    public function faq()
    {
        $faq = faq::all();
        return view('view.faq', compact(
            'faq'
        ));
    }
    public function about()
    {
        $about = about::all();
        return view('view.about', compact(
            'about'
        ));
    }
    public function member()
    {
        $member = member::all();
        return view('view.member', compact(
            'member'
        ));
    }
}
