<?php

use Carbon\Carbon;
use App\Models\Concert;

function makeMessages()
{
    $messages = [
        'name.required' => 'Debe completar el campo nombre',
        'name_user.required' => 'Debe completar el campo nombre',
        'name_user.min' => 'El largo del nombre es inferior a :min caracteres',
        'name.min' => 'El campo nombre debe tener al menos :min caracteres',
        'email.required' => '⚠ Debe completar el campo correo',
        'password.required' => '⚠ Debe completar el campo contraseña',
        'price.required' => 'El campo precio es obligatorio',
        'date.after' => 'La fecha debe ser mayor a ' . date("d-m-Y"),
        'date.unique' => 'la fecha ya se encuentra ocupada',
        'date.required' => 'El campo fecha es obligatorio',
        'stock.required' => 'El campo stock es obligatorio',
        'stock.between' => 'El rango de entradas es de 100 y 400',

        'email.email' => 'Ingrese una dirección de correo electrónico válida',
        'email.unique' => 'El correo ingresado ya existe en el sistema. Intente iniciar sesión',
        'password.min' => 'La contraseña posee menos de :min caracteres.',
        'name_user.regex' => 'El nombre tiene caracteres no permitidos. Ingrese solo letras',
        'password.regex' => 'La contraseña ingresada no es alfanumerica',
        'stock.numeric' => 'El valor ingresado no es numérico.',
        'price.numeric' => 'El valor ingresado no es numérico.',
        'name.min' => 'El campo nombre del concierto no puede ser inferior a :min caracteres.',
        'price.min' => 'El valor de la entrada no puede ser inferior a $20.000 pesos',

        'email_search.required' => 'Ingrese un correo electrónico válido.',
        'email_search.email' => 'Ingrese un correo electrónico válido.',
        'email_search.string' => 'Ingrese un correo electrónico válido.',

    ];

    return $messages;
}