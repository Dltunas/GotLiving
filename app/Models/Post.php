<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $idUsuario;

    public function usuario(){ // saca los posts de los usuarios
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }

    public function multimedia(){ //Esta saca la multimedia de la forma antigua, pero supongo que no la vas a utilizar
        return $this->belongsTo(Multimedia::class, 'idMultimedia');
    }

}
