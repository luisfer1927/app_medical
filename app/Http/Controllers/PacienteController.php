<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pacientes = Paciente::all(); //Obtener todas las categorías
        return view('/home')
        ->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente/registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Llevar los valores de las campos del formulario a un modelo
        $paciente = new Paciente([
        'documento' => $request->get('documento'),
        'tipoDocumento' => $request->get('tipoDocumento'),
        'nombre' => $request->get('nombre'),
        'apellido' => $request->get('apellido'),
        'direccion' => $request->get('direccion'),
        'telefono' => $request->get('telefono'),
        'genero' => $request->get('genero'),
        'fechaNacimiento' => $request->get('fechaNacimiento'),
        'estadoCivil' => $request->get('estadoCivil')
        ]);

        $paciente->save(); //Guarda en la tabla de la base de datos.
        return redirect('/')
        ->with('success','El producto ha sido guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Visualizar la vista editar
         //Consultar por un id con eloquent
        $paciente = Paciente::findOrFail($id);
        return view('paciente/editar',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id); //Consultar el registro a editar

        //Actualizar los datos en el modelo
        $paciente->documento = $request->documento;
        $paciente->tipoDocumento = $request->tipoDocumento;
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->genero = $request->genero;
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->estadoCivil = $request->estadoCivil;

        //Actualizar en la  base de datos.
        $paciente->update();

        //Redirigir hacia el método index del controlador(Listar)
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //Borrar físicamente el registro
         $paciente->delete();
         return redirect('/');
    }
}
