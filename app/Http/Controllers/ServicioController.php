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

    //Function index
    public function index(){
        $servicio = Servicio::all();
        return [
            'serv' => $servicio
        ];
    }

    //Function update
    public function update(Request $request) {
        $servicio = Servicio::findOrFail($request->id);
        $servicio -> descripcion = $request -> descripcion;
        $servicio -> precio = $request -> precio;
        $servicio -> edo = $request -> edo;
        $servicio -> save();
    }

    //Function eliminar
    public function destroy(Request $request){
        $servicio = Servicio::findOrFail($request->id);
        $servicio -> delete();
    }

}
