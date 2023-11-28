<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Redirecciona al dashboard.
    public function dashboard()
    {
        return view('dashboard');
    }
}
