<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('idArrendatario');
            $table->foreign('idArrendatario')->references('id')->on('arrendatarios')->onDelete('cascade');

            $table->text('descripcion');
            $table->text('titulo');
            $table->integer('calificacionGlobal');
            $table->integer('cantidadCalificaciones');
            $table->text('direccion');
            $table->text('tiempoRentaMax');
            $table->text('tiempoRentaMin');
            $table->text('precio');
            $table->text('foto');

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
        Schema::dropIfExists('inmuebles');
    }
}
