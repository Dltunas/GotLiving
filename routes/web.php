<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CuentaController;
use \App\Http\Controllers\PostController;
use App\Http\Controllers\ArrendatarioController;
use App\Http\Controllers\InmueblesController;
use App\Http\Controllers\RentaController;

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

Route::post('register', [UsuarioController::class, 'register']);    // registro usuario

Route::post('login', [UsuarioController::class, 'authenticate']); //login

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

//Salomon routes
Route::get('/inmuebles', [InmueblesController::class, 'index'])->name('inmuebles');
Route::get('/inmuebles/{id}', [InmueblesController::class, 'show'])->name('inmuebles-show');
Route::get('/inmuebles{id}', [InmueblesController::class, 'rentar'])->name('inmuebles-rentar');

Route::get('/rentaActual/{id}', [RentaController::class, 'mostrarRenta'])->name('renta-mostrar');

//Israel routes
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/rentas/{idCliente}',[RentaController::class, 'ObtenerListaRentas']);

Route::get('/arrendatario/{idArrendatario}', [ArrendatarioController::class, 'ObtenerArrendatario']);

Route::get('/rentaActual/{idRenta}', [RentaController::class, 'ObtenerRenta'])->name('Obtener-Renta');

Route::patch('/rentaActual/{idRenta}', [RentaController::class, 'CalificarRenta'])->name('Calificar-Renta');


