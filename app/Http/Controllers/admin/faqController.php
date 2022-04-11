<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;

class faqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'FAQ';
        $datas = faq::all();
        return view('admin.faq.index', compact(
            'datas',
            'title'
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
        $model = new faq;
        return view('admin.faq.create', compact(
            'model'
        ));
        // $model->question = "okta1";
        // $model->answer = "saya pintar";
        // if ($model->save())
        //     return "berhasil";
        // else
        //     return "gagal";

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
        $model = new faq;
        $model->question = $request->question;
        $model->answer = $request->answer;
        $model->save();
        return redirect('adminFaq');
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
        $model = faq::find($id);
        return view('admin.faq.update', compact(
            'model'
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
        $model = faq::find($id);
        $model->question = $request->question;
        $model->answer = $request->answer;
        $model->save();
        return redirect('adminFaq');
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
        $model = faq::find($id);
        $model->delete();
        return redirect('adminFaq');
    }
}
