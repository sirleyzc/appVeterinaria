<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\AnimaleController;
use App\Http\Controllers\HistoriasClinicaController;

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
});

//// Rutas tabla veterinario
Route::post('/api/veterinario/registrar',[VeterinarioController::class, 'store']);
Route::get('/api/veterinario/listar', [VeterinarioController::class, 'index']);
Route::post('/api/veterinario/actualizar', [VeterinarioController::class, 'update']);
Route::post('/api/veterinario/eliminar', [VeterinarioController::class, 'destroy']);

//// Rutas tabla servicios 
Route::post('/api/servicio/registrar',[ServicioController::class, 'store']);
Route::get('/api/servicio/listar', [ServicioController::class, 'index']);
Route::post('api/servicio/actualizar', [ServicioController::class, 'update']);
Route::post('api/servicio/eliminar', [ServicioController::class, 'destroy']);

/// Rutas tabla Propietarios
Route::post('/api/propietario/registrar',[PropietarioController::class, 'store']);
Route::get('/api/propietario/listar', [PropietarioController::class, 'index']);
Route::post('/api/propietario/actualizar', [PropietarioController::class, 'update']);
Route::post('/api/propietario/eliminar', [PropietarioController::class, 'destroy']);

///Rutas tabla animales
Route::post('/api/animal/registrar', [AnimaleController::class, 'store']);

//Rutas tabla historia clinica
Route::post('/api/historia/registrar', [HistoriasClinicaController::class, 'store']);