<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(session('auth'))
        {
            return view('dashboard');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
