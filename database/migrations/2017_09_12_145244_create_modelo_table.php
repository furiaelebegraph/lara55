<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('casa_id');
            $table->string('imagen');
            $table->string('recamaras')->default('-');
            $table->string('banos')->default('-');
            $table->string('m_construccion')->default('-');
            $table->string('m_totales')->default('-');
            $table->string('piso')->default('-');
            $table->string('caracteristicas_casa');
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
        Schema::dropIfExists('modelo');
    }
}
