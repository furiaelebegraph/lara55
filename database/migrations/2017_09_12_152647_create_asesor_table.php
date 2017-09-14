<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesor', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('nombre');
            $table->string('tipo_asesor_id');
            $table->string('imagen');
            $table->string('telefeno')->default('-');
            $table->string('correo')->default('-');
            $table->string('descripcion')->default('-');
            $table->string('whats')->default('-');
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
        Schema::dropIfExists('asesor');
    }
}
