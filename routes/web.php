<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KomiteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\StajController;
use App\Http\Controllers\Admin\BasvuruController;
use App\Http\Controllers\Admin\IlanController;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
   Route::get('panel',[MainController::class,'dashboard'])->name('dashboard');
});

Route::group(['middleware'=>'auth','isAdmin'],function(){
   Route::get('basvuru',[BasvuruController::class,'basvurular'])->name('basvurular');
});

Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'], function(){
   Route::get('duyurus/{id}',[KomiteController::class,'destroy'])->whereNumber('id')->name('duyurus.destroy');
  // Route::get('duyurus/{duyurus_id}',[KomiteController::class,'edit']);
   Route::resource('duyurus',KomiteController::class);
   Route::resource('ilans',IlanController::class);
   
});


Route::group(['middleware' => ['auth','isUser'],'prefix'=>'user'], function(){
   Route::get('stajs/{id}',[StajController::class,'destroy'])->whereNumber('id')->name('stajs.destroy');
   Route::resource('stajs',StajController::class);
});
