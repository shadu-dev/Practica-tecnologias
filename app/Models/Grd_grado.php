<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grd_grado extends Model
{
    use HasFactory;
    protected $primaryKey = 'grd_id';


    //Relacion uno a muchos
    public function alumnos(){
        return $this->hasMany(Alm_alumno::class, 'alm_id_grd');
    }

    //Relacion muchos a muchos
    public function materias(){
        return $this->belongsToMany(Mat_materia::class, 'mxg_materiasxgrados', 'mxg_id_grd', 'mxg_id_mat');
    }
}
