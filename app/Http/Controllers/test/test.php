<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\member;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function index()
    {
        return view('view.transaksi.index');
    }
    public function baru()
    {
        $member = member::all();
        return $member;
    }
}
