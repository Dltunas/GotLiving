<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    public function store(Request $request){
        $renta = new Renta();
        $renta->estadoPago = $request->estadoPago;
        $renta->tiempoRenta = $request->tiempoRenta;
        $renta->calificacionIndividual = 0;
        $renta->idCliente = 1;
        $renta->idInmueble = $request->idInmueble;
        $renta->save();

        return redirect()->route('inmuebles.index');
    }
}
