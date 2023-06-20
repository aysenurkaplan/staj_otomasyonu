<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KomiteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\StajController;
use App\Http\Controllers\Admin\BasvuruController;
use App\Http\Controllers\Admin\IlanController;
use App\Http\Controllers\User\İlanController;
use App\Http\Controllers\Admin\ResultController;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
   Route::get('panel',[MainController::class,'dashboard'])->name('dashboard');
});



Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'], function(){
   Route::get('duyurus/{id}',[KomiteController::class,'destroy'])->whereNumber('id')->name('duyurus.destroy');
   Route::get('ilans/{id}',[IlanController::class,'destroy'])->whereNumber('id')->name('ilans.destroy');
   Route::resource('duyurus',KomiteController::class);
   Route::resource('ilans',IlanController::class);
   Route::get('basvuru',[BasvuruController::class,'basvurular'])->name('basvurular');
   Route::resource('basvuru/{staj_id}/results',ResultController::class);
});

Route::group(['middleware'=>'auth','isUser'],function(){
   Route::get('ilan',[İlanController::class,'ilanlar'])->name('ilanlar');
});

Route::group(['middleware' => ['auth','isUser'],'prefix'=>'user'], function(){
   Route::get('stajs/{id}',[StajController::class,'destroy'])->whereNumber('id')->name('stajs.destroy');
   Route::resource('stajs',StajController::class);
});
