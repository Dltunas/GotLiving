<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller {

    public function create() {

        return view('register');
    }

    public function store(Request $request) {

        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        //$usuario = Usuario::create(request(['username', 'password']));

        $user = User::create([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        $this->validate(request(), [
            'nombre' => 'required',
            'apellidos' => 'required',
            'institucion' => 'required',
            'correo_e' => 'required',
            'telefono' => 'required',
            'descripcion' => 'required',
        ]);

        //$idUsuario = DB::table('usuarios')->where('username')->pluck('id')->last();

        //$cliente = Cliente::create(request(['nombre', 'apellidos', 'institucion', 'correo_e', 'telefono', 'descripcion']));

        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->apellidos = $request->input('apellidos');
        $cliente->institucion = $request->input('institucion');
        $cliente->correo_e = $request->input('correo_e');
        $cliente->telefono = $request->input('telefono');
        $cliente->descripcion = $request->input('descripcion');
        $cliente->idUsuario = $user->id;
        $cliente->save(); //INSERT

        auth()->login($user);

        return redirect()->to('/login');
    }

}
