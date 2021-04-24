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
        return "Se Guardo con exito";
    }
     public  function mostrar(){
        $resultados = Usuario::where("id",2)->get();
        return  view("MostrarUsuarios",["resultados"=>$resultados]);
    }
}
