<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function mostrarCuenta(int $idUsuario){ //mostrar perfil del arrendatario
        $cuenta = Cuenta::where('idUsuario', $idUsuario)->first();
        return $cuenta;
    }

}
