<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
/*
Route::get('/', function () {
    return view('welcome');
}); */
Route::get('service',  [HomeController::class , "service"])->name("service");
Route::post("contactar" , [ContactController::class , "sendMail"])->name("sendMail");