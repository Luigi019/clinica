<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for admin users
| Rutas para administradores
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('home',[HomeController::class,'index'])->name('panel');;
   //Rutas para empleados
   //Routes for employee
   Route::get('/empleados',[EmployeeController::class, 'index']);
   Route::get('/empleados/edit',[EmployeeController::class, 'edit']);
   Route::get('/empleados/create',[EmployeeController::class, 'create']);

    //Rutas para usuarios
    //Routes for users
   Route::get('/usuarios',[UserController::class, 'index']);
   Route::get('/usuarios/edit',[UserController::class, 'edit']);
   Route::get('/usuarios/create',[UserController::class, 'create']);

   //Rutas para servicios
   //Routes for service
   Route::get('/servicios',[ServiceController::class, 'index']);
   Route::get('/servicios/edit',[ServiceController::class, 'edit']);
   Route::get('/servicios/create',[ServiceController::class, 'create']);

   //Rutas para roles
   //Routes for roles
   Route::get('/roles',[RoleController::class, 'index'])->name('roles.listar');
   Route::get('/roles/edit',[RoleController::class, 'edit'])->name('roles.edit');
   Route::get('/roles/create',[RoleController::class, 'create'])->name('roles.create');
   Route::get('/roles/sotre',[RoleController::class, 'store'])->name('roles.store');

    Route::post('/Panel',[HomeController::class,'index'])->name('index');

  /*Rutas para todos
  all routes
    Route::resource('/usuarios', [UserController::class]);
    Route::resource('/empleados', [EmployeeController::class]);
    Route::resource('/servicios', [ServiceController::class]);
  */

  });