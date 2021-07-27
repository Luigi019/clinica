<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Service;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();

        $service = Service::all();

        $user = User::all();

        $role = Role::all();
       
        return view('admin.home', compact('user', 'service', 'employee', 'role'));
    }
}
