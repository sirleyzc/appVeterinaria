<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    //Function stores
    public function store(Request $request) {
        $servicio = new Servicio();
        $servicio -> descripcion = $request-> descripcion;
        $servicio -> precio = $request-> precio;
        $servicio -> edo = $request-> edo;
        $servicio -> save();
    }

}
