<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alm_alumno extends Model
{
    use HasFactory;
    protected $primaryKey = 'alm_id';

    public function grado(){
        return $this->belongsTo(Grd_grado::class, 'alm_id_grd');
    }
}
