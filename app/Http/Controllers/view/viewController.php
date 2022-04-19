<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\article;
use App\Models\faq;
use App\Models\member;
use App\Models\product;
use App\Models\stock;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    public function home()
    {
        $title = 'HOME';
        $about = about::limit(1)->get();
        $article = article::limit(6)->get();
        return view('view.home.index', compact([
            'title',
            'about',
            'article'
        ]));
    }
    public function article()
    {
        $title = 'ARTICLE';
        $about = about::limit(1)->get();
        $article = article::all();
        $articlePost = article::limit(1)->get();
        return view('view.article.index', compact([
            'title',
            'articlePost',
            'about',
            'article'
        ]));
    }
    public function product()
    {
        $title = 'PRODUCT';
        $about = about::limit(1)->get();
        $product = product::all();
        $stock = stock::all();
        return view('view.product.index', compact([
            'title',
            'product',
            'about',
            'stock'
        ]));
    }
    public function about()
    {
        $about = about::limit(1)->get();
        $title = 'ABOUT';
        return view('view.about.index', compact([
            'about',
            'title'
        ]));
    }
    public function faq()
    {
        $title = 'FAQ';
        $about = about::limit(1)->get();
        $faq = faq::all();
        return view('view.faq.index', compact([
            'title',
            'about',
            'faq'
        ]));
    }
    public function member()
    {
        $about = about::limit(1)->get();
        $member = member::all();
        $title = 'MEMBER';
        return view('view.member.index', compact([
            'title',
            'about',
            'member'
        ]));
    }
}
