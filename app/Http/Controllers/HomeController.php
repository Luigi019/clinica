<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Retornar las vista welcome
     * Return to welcome view
     *  @var void
     *  @param void
     *  @return view
     */
    public function index()
    {
        $employee['employee'] = Employee::all();

        
        $service['services'] = Service::paginate(6);
        return view('welcome', $employee, $service);
    }
    public function service()
    {
        
        $service['services'] = Service::paginate(6);
        return view('service', $service);
    }
}
