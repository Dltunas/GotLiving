<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inmueble;

class InmuebleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inmueble = new Inmueble();
        $inmueble->descripcion='Una casa amplia en segura unidad habitacional';
        $inmueble->titulo='Casa en briones';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='36';
        $inmueble->direccion='Carretera antigua a Coatepec km10';
        $inmueble->tiempoRentaMax='12';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='15000';
        $inmueble->foto='casa1.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='1';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Departamento en bugambilias xalapa con cajon de estacionamiento';
        $inmueble->titulo='Departamento';
        $inmueble->calificacionGlobal='7';
        $inmueble->cantidadCalificaciones='52';
        $inmueble->direccion='Mezontle Bugambulias, Xalapa';
        $inmueble->tiempoRentaMax='12';
        $inmueble->tiempoRentaMin='1';
        $inmueble->precio='4000';
        $inmueble->foto='casa2.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Casa en el centro historico de xalapa con 3 recamaras y 2 baños completos';
        $inmueble->titulo='Casa en Centro Historico de Xalapa';
        $inmueble->calificacionGlobal='8';
        $inmueble->cantidadCalificaciones='25';
        $inmueble->direccion='Callejon de rojas #27 Xalapa';
        $inmueble->tiempoRentaMax='24';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='8000';
        $inmueble->foto='casa3.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Muy cómodo loft excelente ubicación, zona centro para disfrutar de la ciudad de Xalapa y hermosas vistas';
        $inmueble->titulo='Loft completo xalapa';
        $inmueble->calificacionGlobal='8';
        $inmueble->cantidadCalificaciones='3';
        $inmueble->direccion='Boulevard Adolfo Ruiz Cortinez';
        $inmueble->tiempoRentaMax='6';
        $inmueble->tiempoRentaMin='1';
        $inmueble->precio='5000';
        $inmueble->foto='casa4.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='3';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Disfruta de una de las mejores ubicaciones de Xalapa. Apartotel nuevo con departamentos de reciente construcción y un roof con una de las mejores vistas de la ciudad. Estacionamiento incluido, aire acondicionado, servicio de limpieza diaria y WIFI en todo el edificio.';
        $inmueble->titulo='Departamento con servicio a la habitación';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='230';
        $inmueble->direccion='Centro de la ciudad, estamos detrás de Palacio de Gobierno en una calle sumamente tranquila';
        $inmueble->tiempoRentaMax='24';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='4900';
        $inmueble->foto='casa5.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Casa residencial las cumbres ánimas';
        $inmueble->titulo='Casa en Cumbres';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='30';
        $inmueble->direccion='Paseo de las animas fraccinamiento cumbres residencia #4';
        $inmueble->tiempoRentaMax='24';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='12000';
        $inmueble->foto='casa6.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='3';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Disfruta de la Comodidad en familia o privacidad en pareja esta excelente casa con toda lo necesario para hacer de tu estadía el mejor momento. 3 habitaciones privada 2 1/2 baños Acondicionados';
        $inmueble->titulo='Fantástica Casa Totalmente Equipada';
        $inmueble->calificacionGlobal='8';
        $inmueble->cantidadCalificaciones='10';
        $inmueble->direccion='Bugambilias, Veracruz, Mexico';
        $inmueble->tiempoRentaMax='36';
        $inmueble->tiempoRentaMin='6';
        $inmueble->precio='8700';
        $inmueble->foto='casa7.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='1';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Casa en el centro historico de xalapa con 3 recamaras y 2 baños completos';
        $inmueble->titulo='hermosa casa, 4 recamaras, muy bien ubicada amplia';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='37';
        $inmueble->direccion='Xalapa-Enríquez, Veracruz, Mexico';
        $inmueble->tiempoRentaMax='12';
        $inmueble->tiempoRentaMin='3';
        $inmueble->precio='12000';
        $inmueble->foto='casa8.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='1';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Es un loft de dos cuartos rústicos, con varias paredes en piedra, baño cómodo, un pequeño closet, una mesa con silla para ver la televisión, una mesa con dos sillas para comer o trabajar.';
        $inmueble->titulo='Suite Mediterránea';
        $inmueble->calificacionGlobal='10';
        $inmueble->cantidadCalificaciones='55';
        $inmueble->direccion='Xalapa-Enríquez, Veracruz, Mexico';
        $inmueble->tiempoRentaMax='4';
        $inmueble->tiempoRentaMin='1';
        $inmueble->precio='3500';
        $inmueble->foto='casa9.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='2';
        $inmueble->save();

        $inmueble = new Inmueble();
        $inmueble->descripcion='Es una casa acogedora de dos pisos estilo rústico que ha sido preparada con lo necesario para que disfrutes tu estancia en compañía de familia y amigos. El lugar se encuentra en la colonia Mártires de Chicago';
        $inmueble->titulo='La Casa de Doña Lola';
        $inmueble->calificacionGlobal='9';
        $inmueble->cantidadCalificaciones='82';
        $inmueble->direccion='Xalapa Enríquez, Veracruz, Mexico';
        $inmueble->tiempoRentaMax='8';
        $inmueble->tiempoRentaMin='5';
        $inmueble->precio='9500';
        $inmueble->foto='casa10.jpg';
        $inmueble->estado='1';
        $inmueble->idArrendatario='3';
        $inmueble->save();
    }
}
