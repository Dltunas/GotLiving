<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renta;
use App\Models\Cliente;
use App\Models\Inmueble;
use App\Models\Arrendatario;

class RentaController extends Controller
{
    public function ObtenerRenta ($idRenta){
        $renta = Renta::find($idRenta);
        $cliente = Cliente::find($renta->idCliente);
        $inmueble = Inmueble::find($renta->idInmueble);
        $arrendatario = Arrendatario::find($inmueble->idArrendatario);

        if($renta->calificacionIndividual < 0){
            $calificacionInd = "Sin calificar";
        }else{
            $calificacionInd = $renta->calificacionIndividual;
        }

        return view('rentaActual', ['renta' => $renta, 'cliente' => $cliente, 
        'inmueble' => $inmueble, 'arrendatario' => $arrendatario, 'calificacionInd' => $calificacionInd]);
    }

    public function CalificarRenta ($idRenta, $calificacion){

        $renta = Renta::find($idRenta);
        $renta->calificacionIndividual = 5;
        $renta->save();

        //return redirect()->route('rentaActual/');
    }

}
