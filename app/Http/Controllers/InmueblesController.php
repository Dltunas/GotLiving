<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inmueble;
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('inmuebles.index')->with('success', 'nuevo inmueble');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->route('inmuebles.index')->with('success', 'inmueble actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('inmuebles.index')->with('success', 'inmueble eliminado');
    }

    public function rentar($id)
    {
        $inmueble = Inmueble::find($id);
        $inmueble->estado = 0;
        $inmueble->save();

        $inmuebles = Inmueble::all();

        return redirect()->route('inmuebles',['inmuebles' => $inmuebles]);
    }
}
