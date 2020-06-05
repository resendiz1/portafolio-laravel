<?php

namespace App\Http\Controllers;

class MensajesControlador extends Controller
{
    public function store(){
       
      request()->validate([
          'nombre'=>'required',
          'email' => 'required|email',
          'asunto' => 'required',
          'contenido'=>'required|min:3'
      ]);


      return back()->with('status', 'Mensaje recibido la ctm');
    }
}
