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

    //Function index
    public function index() {
        $propietario = Propietario::all();
        return [
            'prop' => $propietario
        ];
    }

    //Function update
    public function update(Request $request) {
        $propietario = Propietario::findOrFail($request -> id);
        $propietario -> identificacion = $request -> identificacion;
        $propietario -> nombres = $request -> nombres;
        $propietario -> apellidos = $request -> apellidos;
        $propietario -> direccion = $request -> direccion;
        $propietario -> telefono = $request -> telefono;
        $propietario -> edo = $request -> edo;
        $propietario -> save();
    }

    //Function delete
    public function destroy(Request $request) {
        $propietario = Propietario::findOrFail($request -> id);
        $propietario -> delete();
    }
}
