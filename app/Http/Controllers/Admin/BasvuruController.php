<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staj;

class BasvuruController extends Controller
{
     public function basvurular(){
        $stajs=Staj::paginate(5);
        return view('admin.basvurular',compact('stajs'));
       
    }
}
