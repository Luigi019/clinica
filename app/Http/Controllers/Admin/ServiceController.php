<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $datos['Services']=Service::paginate(5);
        return view ('admin.servicios.index', $datos);
    }
    public function create()
    {
        $service = new Service();
        return view ('admin.servicios.create', compact('service'));
    }
    public function edit($id)
    {
        $service=Service::findOrFail($id);
        return view ('admin.servicios.edit', compact('service'));
    }
    public function update(Request $request, $id)
    {
        $datosServicio=$request->except(["_token", '_method']); 
        if($request->hasFile('photo')){
            $service=Service::findOrFail($id);
            Storage::delete('public/'.$service->photo);
            $datosServicio['photo']=$request->file('photo')->store('uploads', 'public');
        }
        Service::where('id', '=',$id)->update($datosServicio);
        $service=Service::findOrFail($id);
        return view ('admin.servicios.edit', compact('service'));
    }
    public function store(Request $request)
    {
            $datosServicio=$request->except("_token");
            if($request->hasFile('photo')){
                $datosServicio['photo']=$request->file('photo')->store('uploads', 'public');
            }
           
            Service::insert($datosServicio);
            //return response()->json($datosServicio);
            return redirect('admin/servicios')->with('mensaje', 'Servicio creado exitosamente');
    }
    public function destroy($id)
    {
        //
        $service=Service::findOrFail($id);
        if( Storage::delete('public/'.$service->photo)){
            Service::destroy($id);
        }
        
     return redirect('admin/servicios')->with('mensaje', 'Servicio eliminado exitosamente');;

    }
}
