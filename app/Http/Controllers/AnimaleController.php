<?php

namespace App\Http\Controllers;

use App\Models\Animale;
use Illuminate\Http\Request;

class AnimaleController extends Controller
{
    //Function store Animales
    public function store(Request $request) {
        $animal = new Animale();
        $animal -> idPropietario = $request -> idPropietario;

        $animal -> nombre = $request -> nombre;
        $animal -> raza = $request -> raza;
        $animal -> peso = $request -> peso;
        $animal -> altura = $request -> altura;
        $animal -> color = $request -> color;
        $animal -> fecNac = $request -> fecha;
        $animal -> descripcion = $request -> descripcion;
        $animal -> edo = $request -> edo;
        $animal -> save();
    }
}
