<?php

namespace App\Http\Controllers;

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
        return view('welcome');
    }
}
