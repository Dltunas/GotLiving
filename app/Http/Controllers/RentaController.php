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
        $idCliente = 1; // WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW

        $renta = Renta::find($idRenta);
        if($renta->idCliente == $idCliente){
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


        }else{
            return redirect('/rentas/');
        }


        
    }

    public function ObtenerListaRentas(){

        $idCliente = 1; //WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW

        if($idCliente != null){ // Si el idCliente no existe, no está logeado entonces ¿es null? o ¿es otro valor? ponlo WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW
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
        }else{
            //Pon aquí un return hacia el login. WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW
        }
        
    }

    public function CalificarRenta (Request $request, $idRenta){

        $idCliente = 1; // WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW

        $renta = Renta::find($idRenta);
        if($renta->idCliente == $idCliente){
            $calificacionIndividualActual = $renta->calificacionIndividual;
            $renta->calificacionIndividual = $request->calificacion;
            $renta->save();
    
            $inmueble = Inmueble::find($renta->idInmueble);
            if($calificacionIndividualActual == -1){
               $inmueble->calificacionGlobal = (($inmueble->calificacionGlobal * $inmueble->cantidadCalificaciones)+$renta->calificacionIndividual)/($inmueble->cantidadCalificaciones+1);
            }else{
            $inmueble->calificacionGlobal = (($inmueble->calificacionGlobal * $inmueble->cantidadCalificaciones)-$calificacionIndividualActual+$renta->calificacionIndividual)/$inmueble->cantidadCalificaciones;
            }
    
            $inmueble->save();
            
            return RentaController::ObtenerRenta($idRenta);
        }else{
            return redirect('/rentas/');
        }
        
    }

    public function RentarInmueble(Request $request, $idInmueble){
        $inmueble = Inmueble::find($idInmueble);
        $inmueble->estado = 0;
        $inmueble->save();

        $renta = new Renta();
        $renta->estadoPago = 'pendiente';
        $renta->tiempoRenta = $request->tiempoRenta;
        $renta->calificacionIndividual = '-1';
        $renta->idCliente = 1; // WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWwwwwwwwwwwwwwwwww
        $renta->idInmueble = $idInmueble;
        $renta->save();

        return redirect('/rentas/');
    }

}
