<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ilan;

class İlanController extends Controller
{
    public function ilanlar(){
        $ilans=Ilan::paginate(2);
         return view('user.ilan.list', compact('ilans'));
    }
}
