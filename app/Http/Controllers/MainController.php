<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duyuru;

class MainController extends Controller
{
    public function dashboard(){
        $duyurus=Duyuru::paginate(3);
        return view('dashboard', compact('duyurus'));
       
    }
    

}
