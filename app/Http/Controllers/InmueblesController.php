<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MostrarCatalogoInmuebles()
    {
        $inmuebles = Inmueble::all();

        $activos = $inmuebles->filter(function ($value, $key){
           return data_get($value, 'estado') == 1;
        });

        $activos = $activos->all();

        return view('inmuebles.index', ['inmuebles' => $activos]);
    }

    public function MostrarInmueble($idInmueble)
    {
        $inmueble = Inmueble::find($idInmueble);
        return view('inmuebles.show', ['inmueble' => $inmueble]);
    }
}
