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

            $table->unsignedBigInteger("idUsuario");
            $table->foreign('idUsuario')->references('id')->on('usuarios')->onDelete('cascade');

            /*General error: 1005 Can't create table `gotliving_bd`.`clientes` (errno: 150 "Foreign key 
            constraint is incorrectly formed") (SQL: alter table `clientes` add constraint `clientes_idusuario_foreign` 
            foreign key (`idUsuario`) references `usuarios` (`idUsuario`) on delete cascade)
            */
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
