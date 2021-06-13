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
   Route::get('/empleados',[EmployeeController::class, 'index'])->name('empleados.listar');
   Route::get('/empleados/edit{employee}',[EmployeeController::class, 'edit'])->name('empleados.edit');
   Route::get('/empleados/create',[EmployeeController::class, 'create'])->name('empleados.create');
   Route::get('/empleados/store',[EmployeeController::class, 'store'])->name('empleados.store');
   Route::get('/empleados/delete{employee}',[EmployeeController::class, 'destroy'])->name('empleados.destroy');
   Route::get('/empleados/ver{employee}',[EmployeeController::class, 'create'])->name('empleados.show');

    //Rutas para usuarios
    //Routes for users
   Route::get('/usuarios',[UserController::class, 'index'])->name('usuarios.listar');
   Route::get('/usuarios/edit{user}',[UserController::class, 'edit'])->name('usuarios.edit');
   Route::get('/usuarios/create',[UserController::class, 'create'])->name('usuarios.create');
   Route::get('/usuarios/store',[UserController::class, 'store'])->name('usuarios.store');
   Route::get('/usuarios/delete{user}',[UserController::class, 'destroy'])->name('usuarios.destroy');
   Route::get('/usuarios/ver{user}',[UserController::class, 'create'])->name('usuarios.show');

   //Rutas para servicios
   //Routes for service
   Route::get('/servicios',[ServiceController::class, 'index'])->name('servicios.listar');
   Route::get('/servicios/edit{service}',[ServiceController::class, 'edit'])->name('servicios.edit');
   Route::get('/servicios/create',[ServiceController::class, 'create'])->name('servicios.create');
   Route::get('/servicios/store',[ServiceController::class, 'store'])->name('servicios.store');
   Route::get('/servicios/delete{service}',[ServiceController::class, 'destroy'])->name('servicios.destroy');
   Route::get('/servicios/ver{service}',[ServiceController::class, 'create'])->name('servicios.show');

   //Rutas para roles
   //Routes for roles
   Route::get('/roles',[RoleController::class, 'index'])->name('roles.listar');
   Route::get('/roles/edit/{role}',[RoleController::class, 'edit'])->name('roles.edit');
   Route::get('/roles/create',[RoleController::class, 'create'])->name('roles.create');
   Route::post('/roles/store',[RoleController::class, 'store'])->name('roles.store');
   Route::get('/roles/delete/{role}',[RoleController::class, 'destroy'])->name('roles.destroy');
   Route::get('/roles/ver/{role}',[RoleController::class, 'create'])->name('roles.show');
  /*Rutas para todos
  all routes
    Route::resource('/usuarios', [UserController::class]);
    Route::resource('/empleados', [EmployeeController::class]);
    Route::resource('/servicios', [ServiceController::class]);
  */

  });
