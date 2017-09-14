<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->default('-');
            $table->integer('tipo_inmueble_id')->default('-');
            $table->text('descripcion')->default('-');
            $table->integer('ciudad_id')->default('-');
            $table->integer('estado_id')->default('-');
            $table->string('metros_terreno')->default('-');
            $table->string('tipo_venta_id')->default('-');
            $table->string('direccion')->default('-');
            $table->string('asesor_id')->default('-');
            $table->string('costo')->default('-');
            $table->string('portada')->default('-');
            $table->string('banos'->default('-');
            $table->string('metros_construccion')->default('-');
            $table->string('caracteristicas_casa_id')->default('-');
            $table->string('lat')->default('21.012935');
            $table->string('alt')->default('-101.114675');
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
        Schema::dropIfExists('casa');
    }
}
