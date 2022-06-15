<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new Cliente();
        $cliente->idUsuario = 1;
        $cliente->nombre = 'Alfredo';
        $cliente->apellidos = 'Delgado Santiago';
        $cliente->institucion = 'Universidad Veracruzana';
        $cliente->correo_e = 'dltunasd@gmail.com';
        $cliente->telefono = '9211404855';
        $cliente->descripcion = 'Hola, soy alfredo, mucho gusto.';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->idUsuario = 2;
        $cliente->nombre = 'Salomon';
        $cliente->apellidos = 'Apellido1 Apellido2';
        $cliente->institucion = 'Universidad Veracruzana';
        $cliente->correo_e = 'salomon@gmail.com';
        $cliente->telefono = '2286476723';
        $cliente->descripcion = 'Hola, soy salomon, mucho gusto.';
        $cliente->save();

        $cliente = new Cliente();
        $cliente->idUsuario = 3;
        $cliente->nombre = 'Jose Israel';
        $cliente->apellidos = 'Zavaleta Rivera';
        $cliente->institucion = 'Universidad Veracruzana';
        $cliente->correo_e = 'israel@gmail.com';
        $cliente->telefono = '2284520936';
        $cliente->descripcion = 'Hola, soy israel, mucho gusto.';
        $cliente->save();
    }
}
