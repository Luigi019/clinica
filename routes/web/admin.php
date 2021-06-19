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

    Route::get('home', [HomeController::class, 'index'])->name('panel');;
    //Rutas para empleados
    //Routes for employee
   Route::prefix('empleados')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('empleados.listar');
    Route::get('/edit/{employee}', [EmployeeController::class, 'edit'])->name('empleados.edit');
    Route::get('/create', [EmployeeController::class, 'create'])->name('empleados.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('empleados.store');
    Route::put('/update/{employee}', [EmployeeController::class, 'update'])->name('empleados.update');
    Route::get('/delete/{employee}', [EmployeeController::class, 'destroy'])->name('empleados.destroy');
    Route::get('/ver{employee}', [EmployeeController::class, 'create'])->name('empleados.show');
   });

    //Rutas para usuarios'
    //Routes for users
    Route::group(['prefix'=>'usuarios'] , function(){
        Route::get('/', [UserController::class, 'index'])->name('user.list');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/ver{user}', [UserController::class, 'show'])->name('user.show');
    });


    //Rutas para servicios
    //Routes for service

    Route::group(['prefix' => 'servicios'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('servicios.listar');
        Route::get('/edit/{service}', [ServiceController::class, 'edit'])->name('servicios.edit');
        Route::get('/create', [ServiceController::class, 'create'])->name('servicios.create');
        Route::post('/store', [ServiceController::class, 'store'])->name('servicios.store');
        Route::put('u/update/{service}', [ServiceController::class, 'update'])->name('servicios.update');
        Route::get('/delete{service}', [ServiceController::class, 'destroy'])->name('servicios.delete');
        Route::get('/ver/{service}', [ServiceController::class, 'create'])->name('servicios.show');
    });

    //Rutas para roles
    //Routes for roles
Route::group(['prefix'=>'roles'], function(){

    Route::get('/', [RoleController::class, 'index'])->name('roles.listar');
    Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
    Route::put('/update/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::get('/delete/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('/ver/{role}', [RoleController::class, 'create'])->name('roles.show');

});
    /*Rutas para todos
  all routes
    Route::resource('/usuarios', [UserController::class]);
    Route::resource('/empleados', [EmployeeController::class]);
    Route::resource('/servicios', [ServiceController::class]);
    Route::resource('/roles', [RoleController::class]);
  */
});
