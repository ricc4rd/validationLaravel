<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index (request $request){
        return view ('formBoot');
    }

    public function guardar (request $request){
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'email' => 'required | email | unique:forms',
            'direccion' => 'required',
            'telefono' => 'required | numeric'
        ],
        [
            'codigo.required' => '¡Importante! este campo no puede estar vacio',
            'nombre.required' => '¡Importante! escriba su codigo',
            'direccion.required' => '¡Importante! escriba la dirección',
            'telefono.numeric' => '¡Importante! escriba el numero de telefono',
            'email.required' => '¡Importante! escriba su correo'

        ]    
    );

        $form = new Form;
        $form->codigo = $request->codigo;
        $form->nombre = $request->nombre;
        $form->email = $request->email;
        $form->direccion = $request->direccion;
        $form->telefono = $request->telefono;

        $form->save();
        return back()->with('success', '¡Validación exitosa!');
    }

}
