<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arrendatario;

class ArrendatarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrendatario = new Arrendatario();
        $arrendatario->nombre = 'Panchito';
        $arrendatario->apellidos='Perez';
        $arrendatario->urlFoto='public/bootstrap/assets/img/masterchief.jpg';
        $arrendatario->institucion='HAHA';
        $arrendatario->correo_e='fulano@gmail.com';
        $arrendatario->telefono='2285410253';
        $arrendatario->descripcion='alfa';
        $arrendatario->direccion='cempoala';
        $arrendatario->save();

        $arrendatario = new Arrendatario();
        $arrendatario->nombre = 'Zulma';
        $arrendatario->apellidos='Hernandez';
        $arrendatario->urlFoto='public/bootstrap/assets/img/masterchief.jpg';
        $arrendatario->institucion='RAF';
        $arrendatario->correo_e='sultana@gmail.com';
        $arrendatario->telefono='2281024778';
        $arrendatario->descripcion='beta';
        $arrendatario->direccion='Xalapa';
        $arrendatario->save();

        $arrendatario = new Arrendatario();
        $arrendatario->nombre = 'Juan';
        $arrendatario->apellidos='Camaney';
        $arrendatario->urlFoto='public/bootstrap/assets/img/masterchief.jpg';
        $arrendatario->institucion='SS';
        $arrendatario->correo_e='perengano@gmail.com';
        $arrendatario->telefono='2285136978';
        $arrendatario->descripcion='gamma';
        $arrendatario->direccion='Coatepec';
        $arrendatario->save();


    }
}
