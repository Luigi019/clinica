<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Publics routes
| Rutas para visitantes
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('service',  [HomeController::class , "service"])->name("service");
Route::post("contactar" , [ContactController::class , "sendMail"])->name("sendMail");
