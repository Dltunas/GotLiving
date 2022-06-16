<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->id();

            $table->integer('estadoPago');
            $table->text('tiempoRenta');
            $table->integer('calificacionIndividual');

            $table->unsignedBigInteger('idCliente');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');

            $table->unsignedBigInteger('idInmueble');
            $table->foreign('idInmueble')->references('id')->on('inmuebles')->onDelete('cascade');

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
