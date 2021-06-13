<?php

namespace App\Http\Controllers\Admin;

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
}
