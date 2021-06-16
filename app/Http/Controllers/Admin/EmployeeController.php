<?php

namespace App\Http\Controllers\Admin;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view ('admin.empleados.index');
    }
    public function create()
    {
        return view ('admin.empleados.create');
    }
    public function edit()
    {
        return view ('admin.empleados.edit');
    }
    public function store(Request $request)
    {
            $datosEmpleado=$request->except("_token");
           
            Employee::insert($datosEmpleado);
            return response()->json($datosEmpleado);
    }
    public function destroy()
    {
        return view ('admin.empleados.destroy');
    }
 
}
