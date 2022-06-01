<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'MEMBER';
        $menu = 'page';
        $datas = member::all();
        return view('admin.member.index', compact(
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
        $title = 'MEMBER';
        $menu = 'page';
        $model = new member;
        return view('admin.member.create', compact(
            'model',
            'title',
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
        $model = new member;
        $model->name = $request->name;
        $model->description = $request->description;
        $model->category = $request->category;
        $model->image = $request->file('image')->store('post-images/member');

        $model->save();
        return redirect('adminMember');
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
        $model = member::find($id);
        return view('admin.member.update', compact(
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
        $model = member::find($id);
        $model->name = $request->name;
        $model->description = $request->description;
        $model->category = $request->category;
        if ($request->file('image')) {
            $model->image = $request->file('image')->store('post-images/member');
        } else {
            $model->image = $request->image1;
        }
        $model->save();
        return redirect('adminMember');
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
        $model = member::find($id);
        $model->delete();
        return redirect('adminMember');
    }
}
