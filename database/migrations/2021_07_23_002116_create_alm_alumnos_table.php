<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm_alumnos', function (Blueprint $table) {
            $table->id('alm_id');
            $table->string('alm_codigo', 100);
            $table->string('alm_nombre', 300);
            $table->integer('alm_edad');
            $table->string('alm_sexo', 100);
            $table->unsignedBigInteger('alm_id_grd');
            $table->string('alm_observación', 300);
            $table->foreign('alm_id_grd')->references('grd_id')->on('grd_grados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alm_alumnos');
    }
}
