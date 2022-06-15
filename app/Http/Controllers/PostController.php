<?php

namespace App\Http\Controllers;


use App\Models\Multimedia;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Http\JsonResponse;

class PostController extends Controller
{


    public function getPostsPerfilUsuario (int $idUsuario){

        $posts = Post::whereIn('idUsuario', DB::table('posts')->selectRaw('idUsuario as idUsuario')->where('idUsuario', $idUsuario))
            ->orderBy('updated_at', 'asc')->get();


        return response()->json(compact('posts'),201);
    }
}
