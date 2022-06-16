<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('apellidos');
            $table->string('institucion');
            $table->string('correo_e')->unique();
            $table->string('telefono');
            $table->string('descripcion')->nullable();

            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');

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
        Schema::dropIfExists('clientes');
    }
}
