<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Duyuru;
use App\Models\Staj;
use App\Http\Requests\DuyuruCreateRequest;
use App\Http\Requests\DuyuruUpdateRequest;


class KomiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
        $stajs=Staj::paginate(5);
        $duyurus=Duyuru::paginate(5);
        return view('admin.duyuru.list', compact('duyurus','stajs'));
        
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.duyuru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DuyuruCreateRequest $request)
    {
        Duyuru::create($request->post());

        return redirect()->route('duyurus.index')->withSuccess('Duyuru Başarıyla Oluşturuldu');
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
        $duyuru = Duyuru::find($id) ?? abort(404,'Duyuru Bulunamadı');
        return view('admin.duyuru.edit',compact('duyuru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DuyuruUpdateRequest $request, $id)
    { 
        $duyuru = Duyuru::find($id) ?? abort(404,'Duyuru Bulunamadı');
        Duyuru::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route('duyurus.index')->withSuccess('Duyuru güncelleme işlemi başarıyla gerçekleşti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $duyuru = Duyuru::find($id) ?? abort(404,'Duyuru Bulunamadı');
        $duyuru->delete();
        return redirect()->route('duyurus.index')->withSuccess('Duyuru silme işlemi başarıyla gerçekleşti');
    }
}
