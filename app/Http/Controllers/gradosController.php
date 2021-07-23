<?php

namespace App\Http\Controllers;
use App\Models\Grd_grado;

use Illuminate\Http\Request;

class gradosController extends Controller
{
    /**
     * Obtiene todas las grados
     */
    public function getAll(){
        return Grd_grado::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grado = new Grd_grado;
        $grado->grd_nombre = $request->gradoName;
        return $grado->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Grd_grado::where('grd_id', '=', $id)->first();
        return $grado;
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
        $grado = Grd_grado::find($id);
        $grado->grd_nombre = $request->gradoName;
        $v = $grado->save();
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

        return Grd_grado::destroy($id);
    }
}
