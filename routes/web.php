<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KomiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'], function(){
   Route::resource('duyurus',KomiteController::class);
});