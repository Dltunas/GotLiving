<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inmueble;
use Illuminate\Support\Facades\Hash;

class InmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inmueble = new Inmueble();
        $inmueble->descripcion='Una casa amplia en segura unidad habitacional';
        $inmueble->titulo='Casa en briones';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='36';
        $inmueble->direccion='Carretera antigua a Coatepec km10';
        $inmueble->tiempoRentaMax='12';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='15000';
        $inmueble->foto="asset('bootstrap/assets/img/casa1.jpg')";
        $inmueble->estado='1';
        $inmueble->idArrendatario='1';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Departamento en bugambilias xalapa con cajon de estacionamiento';
        $inmueble->titulo='Departamente#2';
        $inmueble->calificacionGlobal='7';
        $inmueble->cantidadCalificaciones='52';
        $inmueble->direccion='Mezontle Bugambulias, Xalapa';
        $inmueble->tiempoRentaMax='12';
        $inmueble->tiempoRentaMin='1';
        $inmueble->precio='4000';
        $inmueble->foto="asset('bootstrap/assets/img/casa2.jpg')";
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Casa en el centro historico de xalapa con 3 recamaras y 2 baños completos';
        $inmueble->titulo='Casa en Centro Historico de Xalapa';
        $inmueble->calificacionGlobal='8';
        $inmueble->cantidadCalificaciones='25';
        $inmueble->direccion='Callejon de rojos #27 Xalapa';
        $inmueble->tiempoRentaMax='24';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='8000';
        $inmueble->foto="asset('bootstrap/assets/img/casa3.jpg')";
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();
    }
}
