<?php

namespace App\Http\Controllers;

use App\Models\Grd_grado;
use App\Models\Alm_alumno;
use Illuminate\Http\Request;

class alumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $grados = Grd_grado::all();
        return view('alumnos')->with('grados', $grados);
    }
    
    
    public function getAll(){
        $alumnos = Alm_alumno::with('grado')->orderBy('alm_id', 'desc')->simplePaginate(5);
        return $alumnos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alm_alumno;
        $alumno->alm_nombre = $request->nombre;
        $alumno->alm_codigo = $request->codigo;
        $alumno->alm_edad = $request->edad;
        $alumno->alm_sexo = $request->sexo;
        $alumno->alm_id_grd = $request->grado;
        $alumno->alm_observación = $request->observacion;
        return $alumno->save();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
