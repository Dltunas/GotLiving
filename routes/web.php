<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrendatarioController;
use App\Http\Controllers\InmueblesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create']) //abrir pantalla registro
->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store']) //hacer el registro
->name('register.store');

Route::get('/login', [SessionsController::class, 'create']) //abrir pantalla login
->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store']) //loguearse
->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy']) //Desloguearse
->middleware('auth')
    ->name('login.destroy');

//Salomon routes
Route::get('/catalogoInmuebles', [InmueblesController::class, 'MostrarCatalogoInmuebles'])->middleware('auth')->name('Catalogo-Inmuebles');

Route::get('/inmueble/{idInmueble}', [InmueblesController::class, 'MostrarInmueble'])->middleware('auth')->name('Mostrar-Inmueble');

Route::patch('/rentarInmueble/{idInmueble}', [RentaController::class, 'RentarInmueble'])->middleware('auth')->name('Rentar-Inmueble');

//Israel routes
Route::get('/rentas',[RentaController::class, 'ObtenerListaRentas'])->middleware('auth')->name('Rentas');

Route::get('/arrendatario/{idArrendatario}', [ArrendatarioController::class, 'ObtenerArrendatario'])->middleware('auth');

Route::get('/rentaActual/{idRenta}', [RentaController::class, 'ObtenerRenta'])->name('Obtener-Renta')->middleware('auth');

Route::patch('/rentaActual/{idRenta}', [RentaController::class, 'CalificarRenta'])->name('Calificar-Renta')->middleware('auth');

