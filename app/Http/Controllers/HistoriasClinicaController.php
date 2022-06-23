<?php

namespace App\Http\Controllers;

use App\Models\HistoriasClinica;
use Illuminate\Http\Request;

class HistoriasClinicaController extends Controller
{
    //Function stores
    public function store(Request $request) {
        $historia = new HistoriasClinica();
        $historia -> idAnimales = $request -> idAnimal;
        $historia -> idVeterinarios = $request -> idVeterinario;
        $historia -> idUser = $request -> idUser; 

        $historia -> codigo = $request -> codigo;
        $historia -> fecha = $request -> fecha;
        $historia -> diagnostico = $request -> diagnostico;
        $historia -> tratamiento = $request -> tratamiento;
        $historia -> medicamento = $request -> medicamento;
        $historia -> edo = $request -> edo;
        $historia -> save();
    }
}
