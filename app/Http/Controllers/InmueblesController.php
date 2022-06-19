<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inmueble;
use App\Http\Controllers\RentaController;
use Illuminate\Validation\Rules\In;

class InmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmuebles = Inmueble::all();

        $activos = $inmuebles->filter(function ($value, $key){
           return data_get($value, 'estado') == 1;
        });

        $activos = $activos->all();

        return view('inmuebles.index', ['inmuebles' => $activos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inmueble = Inmueble::find($id);
        return view('inmuebles.show', ['inmueble' => $inmueble]);
    }



    public function rentar($id)
    {
        $inmueble = Inmueble::find($id);
        $inmueble->estado = 0;
        $inmueble->save();

        return redirect()->route('renta-mostrar',['id' => $inmueble->idInmueble]);
    }
}
