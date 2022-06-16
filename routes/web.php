<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CuentaController;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\InmueblesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    return view ('login');
});

Route::get('/inmuebles', [InmueblesController::class, 'index'])->name('inmuebles');
Route::post('/inmuebles', [InmueblesController::class, 'store'])->name('inmuebles');
Route::get('/inmuebles/{id}', [InmueblesController::class, 'show'])->name('inmuebles-edit');
Route::patch('/inmuebles/{id}', [InmueblesController::class, 'update'])->name('inmuebles-update');
Route::delete('/inmuebles/{id}', [InmueblesController::class, 'delete'])->name('inmuebles-destroy');

Route::post('register', [UsuarioController::class, 'register']);    // registro usuario

Route::post('login', [UsuarioController::class, 'authenticate']); //login

//Route::resource('inmuebles', InmueblesController::class);

Route::group(['middleware' => ['jwt.verify']], function() {

    //Route::post('register/cuenta',[CuentaController::class, 'create']);   //Registrar cuenta

    Route::post('logout',[UsuarioController::class, 'logout']); //Cerrar sesión

    //HomeController
    Route::get('{idUsuario}/mostrarCuenta', [HomeController::class, 'mostrarCuenta']); //Para ver el perfil del arrendatario

    //Cuenta
    Route::get('getCuenta',[CuentaController::class, 'getCuenta']); //Para ver nuestro propio pearfil
    Route::put('editInfo',[CuentaController::class, 'editInfo']); //Editar la info de nuestro propio perfil

    //Post
    Route::get('{idUsuario}/getPostsPerfilUsuario', [PostController::class, 'getPostsPerfilUsuario']); //Ver los posts del arrendatario en su perfil (No se si es necesario)
});
