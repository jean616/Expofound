<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function guardarr(Request $data){
        $doc = new Documento();
        $doc ->fecha_subida = $data["fecha_subida"];
        $doc ->id_usuario = $data["id_usuario"];
        $doc ->nombre_cliente = $data["nombre_cliente"];
        $doc ->save();
        return "Guardado";
    }
    public function mostrar(){
        $result = Documento::all ();
        return view("MostrarDocumento",["resultados"=>$result]);
    }
}
