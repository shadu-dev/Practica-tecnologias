<?php

namespace App\Http\Controllers;
use App\Models\Mat_materia;

use Illuminate\Http\Request;

class materiasController extends Controller
{
    /**
     * Obtiene todas las materias
     */
    public function getAll(){
        return Mat_materia::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Mat_materia;
        $materia->mat_nombre = $request->materiaName;
        return $materia->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Mat_materia::where('mat_id', '=', $id)->first();
        return $materia;
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
        $materia = Mat_materia::find($id);
        $materia->mat_nombre = $request->materiaName;
        $v = $materia->save();
        return $v ;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        return Mat_materia::destroy($id);
    }
}
