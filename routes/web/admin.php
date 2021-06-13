<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for admin users
| Rutas para administradores
|
*/

<<<<<<< HEAD
  Route::get('admin',function(){
    return view('admin.home');
    })->name('panel');;
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
   
    Route::post('/Panel',[HomeController::class,'index'])->name('index');
    
  /*Rutas para todos 
  all routes
    Route::resource('/usuarios', [UserController::class]);
    Route::resource('/empleados', [EmployeeController::class]);
    Route::resource('/servicios', [ServiceController::class]);
  */
  
  });
=======
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('admin', function () {
        return view('admin.home');
    })->name('panel');;
});
>>>>>>> b3b97c5bbf3f1f36445b556dafd98f1ca14e754e
