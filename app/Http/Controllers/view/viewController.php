<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    public function home()
    {
        $title = 'HOME';
        return view('view.home.index', compact([
            'title'
        ]));
    }
    public function article()
    {
        $title = 'ARTICLE';
        return view('view.article.index', compact([
            'title'
        ]));
    }
    public function product()
    {
        $title = 'PRODUCT';
        return view('view.product.index', compact([
            'title'
        ]));
    }
    public function about()
    {
        $title = 'ABOUT';
        return view('view.about.index', compact([
            'title'
        ]));
    }
    public function faq()
    {
        $title = 'FAQ';
        return view('view.faq.index', compact([
            'title'
        ]));
    }
}
