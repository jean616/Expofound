<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuarioController extends Controller
{
    public  function  guardar(Request $dato){

        $usario = new Usuario();
        $usario ->Tipo_usuario = $dato["tipo_usuario"];
        $usario ->nombre_usuario = $dato["Nombre"];
        $usario ->Apellido_usuario = $dato["Apellido"];
        $usario ->Contraseña = $dato["Contraseña"];
        $usario ->telefono = $dato["Telefono"];
        $usario ->dni = $dato["dni"];
        $usario ->nombre_compañia = $dato["Compañia"];
        $usario -> save();
        return redirect("ingresoUsuarios");
    }
     public  function mostrar(){
        $resultados = Usuario::all();
        return  view("MostrarUsuarios",["resultados"=>$resultados]);
    }
    public function mostrarUsuario(int $id){
        $resultados = Usuario::where("id",$id )->first();
        return view("actualizarUsuarios",["dato"=>$resultados]);
    }
    public function actualizar(Request $request){
            $usuar=Usuario::find($request->id);
            $usuar->tipo_usuario = $request->tipo_usuario;
            $usuar->nombre_usuario = $request->nombre_usuario;
            $usuar->Apellido_usuario = $request->Apellido_usuario;
            $usuar->Contraseña = $request->Contraseña;
            $usuar->telefono = $request->telefono;
            $usuar->dni = $request->dni;
            $usuar->nombre_compañia = $request->nombre_compañia;
            $usuar->save();
            return redirect("MostrarUsuarios");
    }
    public function MostrarUsuarioElimminar(int $id)
    {

         $resultados = Usuario::where("id", $id)->first();
         return view("EliminarUsuario", ["ddt" => $resultados]);
    }

    Public function Eliminar(Request $request){
        $usuao=Usuario::findOrFail($request->id);
        $usuao->delete();
        return redirect("MostrarUsuarios");
    }
}
