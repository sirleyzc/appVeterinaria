<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    //Function store
    public function store(Request $request) {
        $veterinario = new Veterinario();
        $veterinario -> tarjetaProfesional = $request -> tarjeta;
        $veterinario -> nombres = $request -> nombres;
        $veterinario -> apellidos = $request -> apellidos;
        $veterinario -> telefono = $request -> telefono;
        $veterinario -> direccion = $request -> direccion;
        $veterinario -> estado = $request -> edo;
        $veterinario -> save();
    }

    //Function index
    public function index() {
        $veterinario = Veterinario::all();
        return [
            'vet' => $veterinario
        ];
    }

    //Function update
    public function update(Request $request) {
        $veterinario = Veterinario::findOrFail($request->id);
        $veterinario -> tarjetaProfesional = $request -> tarjeta;
        $veterinario -> nombres = $request -> nombres;
        $veterinario -> apellidos = $request -> apellidos;
        $veterinario -> telefono = $request -> telefono;
        $veterinario -> direccion = $request ->direccion;
        $veterinario -> estado = $request -> edo;
        $veterinario -> save();
    }

    //Function delete 
    public function destroy(Request $request){
        $veterinario = Veterinario::findOrFail($request->id);
        $veterinario -> delete();
    }
}
