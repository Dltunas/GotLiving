<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Arrendatario;


class ArrendatarioController extends Controller
{
    public function ObtenerArrendatario ($idArrendatario){
        $arrendatario = Arrendatario::find($idArrendatario);
        return view('perfilArrendatario', ['arrendatario' => $arrendatario]);
    }
}
