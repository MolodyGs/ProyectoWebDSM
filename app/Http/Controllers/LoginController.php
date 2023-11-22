<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{

    public static $auth = false;

    public function index()
    {

        // if(auth()->check()){
        //     return redirect()->route('dashboard');
        // };
        return view('login');
    }

    public function loginAuth(Request $request)
    {

        $messages = makeMessages();

        //Validar la información
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required']
        ], $messages);

        $credentials = $request->only('email', 'password');

        $response = Http::post('http://192.168.0.5:8000/api/login', $credentials)->json();

        if(isset($response["users_para_admin"])){
            session([
                'auth' => true,
                'user' => 'adminstrador'
            ]);
            return redirect()->route('dashboard');
        }
        else
        {
            return back()->with('message', 'Usuario no registrado o contraseña incorrecta');
        }

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session(['auth' => false]);
        return redirect()->route('login');
    }
}
