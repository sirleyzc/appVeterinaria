<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeterinarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PropietarioController;

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

Route::post('/api/veterinario/registrar',[VeterinarioController::class, 'store']);

//// Rutas tabla servicios 
Route::post('/api/servicio/registrar',[ServicioController::class, 'store']);

/// Rutas tabla Propietarios
Route::post('/api/propietario/registrar',[PropietarioController::class, 'store']);