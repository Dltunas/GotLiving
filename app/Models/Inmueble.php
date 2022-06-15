<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inmueble extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $idUsuario;

    public function usuario(){ // saca los posts de los usuarios
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }

}
