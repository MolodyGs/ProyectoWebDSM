<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(auth()->check())
        {
            return view('dashboard');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
