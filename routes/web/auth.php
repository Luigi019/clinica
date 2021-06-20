<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for authenticate
| Rutas para autenticacion
|
*/

Route::post("contactar" , [ContactController::class , "sendMail"])->name("sendMail");
Route::post('/login',[UserController::class,'login'])->name('login');

Route::post('/logout',[UserController::class,'logout'])->name('logout');