<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArrendatariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrendatarios', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellidos');
            $table->string('urlFoto');
            $table->string('institucion');
            $table->string('correo_e')->unique();
            $table->string('telefono');
            $table->string('descripcion')->nullable();
            $table->string('direccion');

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
        Schema::dropIfExists('arrendatarios');
    }
}
