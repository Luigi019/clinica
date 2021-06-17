<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view ('admin.servicios.create');
    }
    public function edit($id)
    {
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
            return response()->json($datosServicio);
    }
    public function destroy($id)
    {
        //
        Service::destroy($id);
     return redirect('admin/servicios');

    }
}
