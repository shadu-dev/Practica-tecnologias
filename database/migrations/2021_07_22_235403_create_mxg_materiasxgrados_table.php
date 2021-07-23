<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMxgMateriasxgradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mxg_materiasxgrados', function (Blueprint $table) {
            $table->id('mxg_id');
            $table->unsignedBigInteger('mxg_id_grd')->nullable();
            $table->unsignedBigInteger('mxg_id_mat')->nullable();
            $table->foreign('mxg_id_grd')->references('grd_id')->on('grd_grados')->onDelete('set null');
            $table->foreign('mxg_id_mat')->references('mat_id')->on('mat_materias')->onDelete('set null');
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
        Schema::dropIfExists('mxg_materiasxgrados');
    }
}
