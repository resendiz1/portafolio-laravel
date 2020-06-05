<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Proyecto;
use App\Http\Requests\CrearProyecto;
class portafolioControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
      $this->middleware('auth')->except('index', 'show');
     }



    public function index()
    {
       
     $portafolio = Proyecto::latest()->paginate();
     return view('proyectos.index', compact('portafolio'));
    }
    public function show(Proyecto $proyecto){
      
      // return $id;
      return view('proyectos.show',[
        'portafolio' => $proyecto
      ]);
    }


    public function create(){
      return view('proyectos.agregar',[
        'portafolio' => new Proyecto
      ]);
    }


    public function store(CrearProyecto $request){
     
    Proyecto::create($request ->validated());
    return back()->with('status', 'Proyecto creado');
    }



    public function edit(Proyecto $proyecto){
      
      // return $id;
      return view('proyectos.edit',[
        'portafolio' => $proyecto
      ]);
    }

    public function update(Proyecto $proyecto, CrearProyecto $request){
      $proyecto->update($request->validated());

      return redirect()->route('portafolio.show', $proyecto)->with('status', 'Proyecto actualizado');
    }

    public function destroy(Proyecto $proyecto){

      $proyecto -> delete();
      return redirect()->route('portafolio.index', $proyecto)->with('status', 'Proyecto destruido');
    }



}
