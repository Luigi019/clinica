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

Route::get('admin',function(){
	return view('admin.home');
});