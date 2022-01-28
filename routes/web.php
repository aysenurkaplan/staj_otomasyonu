<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KomiteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\StajController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
   Route::get('panel',[MainController::class,'dashboard'])->name('dashboard');
});

Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'], function(){
   Route::get('duyurus/{id}',[KomiteController::class,'destroy'])->whereNumber('id')->name('duyurus.destroy');
   Route::resource('duyurus',KomiteController::class);
});

Route::group(['middleware' => ['auth','isUser'],'prefix'=>'user'], function(){
   Route::resource('stajs',StajController::class);
});