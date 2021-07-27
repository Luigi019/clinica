<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;

class EmployeeController extends Controller
{
    public function index()
    {
       
        $datos['employees'] = Employee::paginate(5);
        return view('admin.empleados.index', $datos);
    }
    public function create()
    {
        $employee = new Employee();
        return view('admin.empleados.create', compact('employee'));
    }
    public function edit(Employee $employee)
    {
        $employee = $employee;
        return view('admin.empleados.edit', compact('employee'));
    }
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => ['required', 'alpha'],
            'position' => ['required', 'alpha'],
            'email' => ['required', 'email'],
            'photo' => ['mimes:jpg,png,jpeg', 'image'],
        ]);
        $dataEmployee = $request->except(["_token", '_method']);
        if ($request->hasFile('photo')) {

            \File::delete(public_path().'/uploads/'.$employee->photo);
            $dataEmployee['photo'] = $request->file('photo')->move(public_path().'/uploads');
            $employee->photo = $dataEmployee['photo'];
        }
    $employee->name = $request->name;
    $employee->email = $request->email;
    $employee->update();
        return back()->with('message','Datos actualizado exitosamente')->with('type','success');
    }
    public function store(Request $request)
    {
        // validate request
        // validando datos enviados
        $request->validate([
            'name' => ['required', 'alpha'],
            'email' => ['required', 'email','unique:employees'],
            'position' => ['required','string'],
            'photo' => ['required', 'mimes:jpg,png,jpeg', 'image'],
        ]);
        // extract data except token
        // extrayendo data menos el token
        $dataEmployee = $request->except("_token");
        // verify file
        if ($request->hasFile('photo')) {
            // store image on storage
            // guardar imagen en storage
            $dataEmployee['photo'] = $request->file('photo')->move(public_path().'/uploads');
        }

        // create data
        // creando datos
        Employee::create($dataEmployee);

        return back()->with('message', 'Empleado creado exitosamente')->with('type','success');
    }
    public function destroy(Employee $employee)
    {

        // delete file
        if (\File::delete(public_path().'/uploads/'.$employee->photo))

            //delete employee
            $employee->delete();

        else
        $employee->delete();

        return back()->with('message', 'Empleado eliminado exitosamente')->with('type','info');
    }
}
