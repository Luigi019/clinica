<?php

namespace App\Http\Controllers\Admin;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $datos['employees']=Employee::paginate(5);
        return view ('admin.empleados.index', $datos);
    }
    public function create()
    {
        $employee = new Employee();
        return view ('admin.empleados.create', compact('employee'));
    }
    public function edit($id)
    {
        $employee=Employee::findOrFail($id);
        return view ('admin.empleados.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {   
        
        $campos=[
            'name'=>'required|string|max:100',
            'lastname'=>'required|string|max:100',
            'email'=>'required|email|max:100',
    ];
    $mensaje=[
        'required'=>'Todos los campos son obligatorios'
    ];
     $this->validate($request, $campos, $mensaje);
        $datosEmpleado=$request->except(["_token", '_method']);
        if($request->hasFile('photo')){
            $employee=Employee::findOrFail($id);
            Storage::delete('public/'.$employee->photo);
            $datosEmpleado['photo']=$request->file('photo')->store('uploads', 'public');
        }
        Employee::where('id', '=',$id)->update($datosEmpleado);

        $employee=Employee::findOrFail($id);
        return redirect('admin/empleados')->with('mensaje', 'Empleado modificado exitosamente');
    }
    public function store(Request $request)
    {
            $campos=[
                    'name'=>'required|string|max:100',
                    'lastname'=>'required|string|max:100',
                    'email'=>'required|email|max:100',
                    'photo'=>'required|max:100000|mimes:jpeg,png,jpg',
            ];
            $mensaje=[
                'required'=>'Todos los campos son obligatorios'
            ];
             $this->validate($request, $campos, $mensaje);
            $datosEmpleado=$request->except("_token");
            if($request->hasFile('photo')){
                $datosEmpleado['photo']=$request->file('photo')->store('uploads', 'public');
            }
           
            Employee::insert($datosEmpleado);
            //return response()->json($datosEmpleado);
            return redirect('admin/empleados')->with('mensaje', 'Empleado creado exitosamente');
        
    }
    public function destroy($id)
    {
        //
        $employee=Employee::findOrFail($id);
        if( Storage::delete('public/'.$employee->photo)){
            Employee::destroy($id);
        }
        
     return redirect('admin/empleados')->with('mensaje', 'Empleado eliminado exitosamente');

    }
 
}
