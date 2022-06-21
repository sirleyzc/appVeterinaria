<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    //Function store propietario
    public function store(Request $request) {
        $propietario = new Propietario();
        $propietario -> identificacion = $request -> id;
        $propietario -> nombres = $request -> nombres;
        $propietario -> apellidos = $request -> apellidos;
        $propietario -> direccion = $request -> direccion;
        $propietario -> telefono = $request -> telefono;
        $propietario -> edo = $request -> edo;
        $propietario -> save();
    }
}
