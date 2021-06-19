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
        $employee = Employee::all();

        $service = Service::all();
        return view('welcome', compact('service', 'employee'));
    }
}
