<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function guardarr(Request $data){
        $data->validate(
            [
                'id_usuario'=>'required | numeric ',
                'nombre_cliente'=>'required |alpha '
            ]
        );
        $doc = new Documento();
        $doc ->fecha_subida = $data["fecha_subida"];
        $doc ->id_usuario = $data["id_usuario"];
        $doc ->nombre_cliente = $data["nombre_cliente"];
        $doc ->save();
        return redirect("/ingresoDocumentos");
    }
    public function mostrar(){
        $result = Documento::all ();
        return view("MostrarDocumento",["resultados"=>$result]);
    }
    public function mostrarDocumento(int $id){
        $resultados = Documento::where("id",$id )->first();
        return view("ActualizarDocumento",["docss"=>$resultados]);
    }

    public function actualizar(Request $request){
        $request->validate(
            [
                'id_usuario'=>'required | numeric ',
                'nombre_cliente'=>'required |alpha '
            ]
        );
        $doccs=Documento::find($request->id);
        $doccs->fecha_subida = $request->fecha_subida;
        $doccs->id_usuario = $request->id_usuario;
        $doccs->nombre_cliente = $request->nombre_cliente;
        $doccs->save();
        return redirect("MostrarDocumento");
    }

    public function MostrarUsuarioElimminar(int $id)
    {
        $resultados = Documento::where("id", $id)->first();
        return view("EliminarDocumento", ["dtl" => $resultados]);
    }

    Public function Eliminar(Request $request){
        $usuao=Documento::findOrFail($request->id);
        $usuao->delete();
        return redirect("MostrarDocumento");
    }
}

