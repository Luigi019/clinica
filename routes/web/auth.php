<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordResetController;
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
Route::post('/recuperar/contraseña',[PasswordResetController::class,'SendLinkForgotPassword'])->name('SendLinkForgotPassword');
Route::post('/logout',[UserController::class,'logout'])->name('logout');