<?php

namespace App\Http\Controllers\Admin;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $datos['employees']=Employee::paginate(5);
        return view ('admin.empleados.index', $datos);
    }
    public function create()
    {
        return view ('admin.empleados.create');
    }
    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        return view ('admin.empleados.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        $datosEmpleado=$request->except(["_token", '_method']); 
        Employee::where('id', '=',$id)->update($datosEmpleado);

        $employee=Employee::findOrFail($id);
        return view ('admin.empleados.edit', compact('employee'));
    }
    public function store(Request $request)
    {
            $datosEmpleado=$request->except("_token");
            if($request->hasFile('photo')){
                $datosEmpleado['photo']=$request->file('photo')->store('uploads', 'public');
            }
           
            Employee::insert($datosEmpleado);
            return response()->json($datosEmpleado);
    }
    public function destroy($id)
    {
        //
        Employee::destroy($id);
     return redirect('admin/empleados');

    }
 
}
