<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ilan;

class IlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ilans=Ilan::paginate(5);
        return view('admin.ilan.list', compact('ilans'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ilan.create');
        return view('admin.duyuru.list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Ilan::create($request->post());

        return redirect()->route('ilans.index')->withSuccess('İlan Başarıyla Oluşturuldu');
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
        $ilan = Ilan::find($id) ?? abort(404,'İlan Bulunamadı');
        return view('admin.ilan.edit',compact('ilan'));
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
         $ilan = Ilan::find($id) ?? abort(404,'İlan Bulunamadı');
        Ilan::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route('ilans.index')->withSuccess('İlan güncelleme işlemi başarıyla gerçekleşti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ilan = Ilan::find($id) ?? abort(404,'İlan Bulunamadı');
        $ilan->delete();
        return redirect()->route('ilans.index')->withSuccess('İlan silme işlemi başarıyla gerçekleşti');
    }
}
