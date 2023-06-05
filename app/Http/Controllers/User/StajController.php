<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StajCreateRequest;
use App\Http\Requests\StajUpdateRequest;
use App\Models\Staj;

class StajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stajs=Staj::paginate(5);
        
        return view('user.staj.list', compact('stajs'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.staj.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StajCreateRequest $request)
    {
        Staj::create($request->post());

        return redirect()->route('stajs.index')->withSuccess('Staj Başarıyla Oluşturuldu');
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
        $staj = Staj::find($id) ?? abort(404,'Staj Bulunamadı');
        return view('user.staj.edit',compact('staj'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StajUpdateRequest $request, $id)
    {
        $staj = Staj::find($id) ?? abort(404,'Staj Bulunamadı');
        Staj::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route('stajs.index')->withSuccess('Staj güncelleme işlemi başarıyla gerçekleşti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staj = Staj::find($id) ?? abort(404,'Staj Bulunamadı');
        $staj->delete();
        return redirect()->route('stajs.index')->withSuccess('Staj silme işlemi başarıyla gerçekleşti');
    }
}
