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

    public function InmuebleRenta($idInmueble){
        //Obtener $idCliente

        $rentas = Renta::all();
        $rentasInmueble = array();
        foreach ($rentas as $renta){
            if($renta->idInmueble == $idInmueble){
                array_push($rentasCliente, $renta);
            }
        }
    }

    public function CalificarRenta (Request $request, $idRenta){

        $renta = Renta::find($idRenta);
        $renta->calificacionIndividual = $request->calificacion;
        $renta->save();

        return RentaController::ObtenerRenta($idRenta);
    }

    public function ObtenerListaRentas($idCliente){

        $rentas = Renta::all();

        $rentasCliente = array();
        foreach ($rentas as $renta){
            if($renta->idCliente == $idCliente){
                array_push($rentasCliente, $renta);
            }
        }

        $rentasPresentacion = new \ArrayObject();

        foreach ($rentasCliente as $rentaCliente){
            $inmueble = Inmueble::find($rentaCliente->idInmueble);
            $idRenta = $rentaCliente->id;
            $idInmueble = $inmueble->id;
            $tituloInmueble = $inmueble->titulo;
            $descripcionInmueble = $inmueble->descripcion;
            $fotoInmueble = $inmueble->foto;
            $rentasPresentacion->append(array($rentasPresentacion, $idRenta, $idInmueble, $fotoInmueble, $tituloInmueble, $descripcionInmueble));
        }

        return view('rentasCliente', ['rentasPresentacion' => $rentasPresentacion]);
    }

    public function mostrarRenta($id){
        return redirect()->route('inmuebles');
    }

}
