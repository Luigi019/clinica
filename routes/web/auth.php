<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for authenticate
| Rutas para autenticacion
|
*/


Route::get('/login',[UserController::class,'index'])->name('login');