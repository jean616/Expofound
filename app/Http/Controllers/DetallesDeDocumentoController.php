<?php

namespace App\Http\Controllers;

use App\Models\Detalles_de_documento;
use Illuminate\Http\Request;

class DetallesDeDocumentoController extends Controller
{
    public function guardado(Request $datos){
        return "Guardado detalles";
    }
    public function mostrar(){
        $result = Detalles_de_documento::all ();
        return view("MostrarDetallesDoc",["resultados"=>$result]);
    }
}
