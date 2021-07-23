<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grd_grado extends Model
{
    use HasFactory;
    protected $primaryKey = 'grd_id';

    public function alumnos(){
        return $this->hasMany('App\Models\Alm_alumno');
    }
}
