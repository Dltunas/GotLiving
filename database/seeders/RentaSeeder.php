<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Renta;

class RentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $renta = new Renta();
        $renta->estadoPago = 'Pendiente';
        $renta->tiempoRenta = "3 meses";
        $renta->calificacionIndividual = "-1";
        $renta->idCliente = "1";
        $renta->idInmueble = "1";

        $renta->save();
    }
}
