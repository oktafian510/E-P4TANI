<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\member;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function coba()
    {
        $member = member::limit(1)->get();
        return $member;
    }
    public function baru()
    {
        $member = member::all();
        return $member;
    }
}
