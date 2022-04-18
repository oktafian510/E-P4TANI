<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\article;
use App\Models\faq;
use App\Models\member;
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
        $faq = faq::all();
        return view('view.faq.index', compact([
            'title',
            'faq'
        ]));
    }
    public function member()
    {
        $member = member::all();
        $title = 'MEMBER';
        return view('view.member.index', compact([
            'title',
            'member'
        ]));
    }
}
