<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for admin users
| Rutas para administradores
|
*/
Route::group(['prefix'=>'admin' , 'middleware' => 'auth'] , function(){

Route::post('admin',function(){
	return view('admin.home');
  })->name('panel');;
  
  });

