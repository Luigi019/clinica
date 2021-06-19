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
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'description'=>['required'],
            'name'=>['required'],
            'photo' => ['mimes:jpg,png,jpeg', 'image'],
        ]);
        $dataService=$request->except(["_token", '_method']); 
        if($request->hasFile('photo'))
        {
            Storage::delete('public/storage/'.$service->photo);
            $dataService['photo']=$request->file('photo')->store('uploads', 'public');
            $service->photo = $dataService['photo'];
        }
        $service->name = $request->name;
        $service->description = $request->description;
        
$service->update();
        return back()->with('message','Actualizado exitosamnete')->with('type','success');
    }
    public function store(Request $request)
    {
            $dataService=$request->except("_token");
            if($request->hasFile('photo'))
            {
                $dataService['photo']=$request->file('photo')->store('uploads', 'public');
            }
           
            Service::insert($dataService);
            //return response()->json($dataService);
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
