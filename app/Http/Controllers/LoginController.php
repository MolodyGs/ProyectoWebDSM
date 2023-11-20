<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{

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

        // Validar la información
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ], $messages);

        $response = Http::post('http://127.0.0.1:8000/api/users');

        $data = $response->json();
        dd($data);

        // $data = json_decode($response, true);

        // var_dump($data);

        // if ($data === null) {
        //     die('Error al decodificar los datos JSON');
        // }

        // if(!auth()->attempt($request->only('email', 'password'), $request->remember))
        // {
        //     return back()->with('message', 'Usuario no registrado o contraseña incorrecta');
        // }
        
        return redirect()->route('dashboard');
    }
}
