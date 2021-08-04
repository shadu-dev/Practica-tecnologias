<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mat_materia extends Model
{
    use HasFactory;
    protected $primaryKey = 'mat_id';

    //Relacion muchos a muchos
    public function grados(){
        return $this->belongsToMany(Grd_grado::class, 'mxg_materiasxgrados', 'mxg_id_mat', 'mxg_id_grd');
    }
    
}
