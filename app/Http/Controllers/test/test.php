<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\member;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function index()
    {
        $title = 'PROFIL';
        $about = about::limit(1)->get();
        // return $profilUser;
        return view('view.transaksi.index', compact([
            'title',
            'about',

        ]));
    }
    public function baru()
    {
        $member = member::all();
        return $member;
    }
}
