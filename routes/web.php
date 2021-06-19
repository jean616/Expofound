<?php


use App\Models\Detalles_de_documento;
use App\Models\Documento;
use App\Models\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetallesDeDocumentoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\UsuarioController;
use \Illuminate\Support\Facades;
use \App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
/*
Route::view('/','auth.login');*/
/*Usuarios*/
Route::get("/ingresoUsuarios",function (){
    if(!Auth::check()){
        return redirect()->route("login");
    }else{
        return view("IngresarUsuarios");
    }
});

Route::get("/ingresoUsuarios/{idcolumna}",function (int $idcolumna){
            return view("IngresarUsuarios")->with("idcolumna",$idcolumna);
});

Route::post("/ingresara_Usuarios",[UsuarioController::class,"guardar"])->name("Guardar_Usuarios");

Route::get("/MostrarUsuarios",[UsuarioController::class,"mostrar"]);

Route::get("/actualizar-Usuarios/{id}",[UsuarioController::class,"mostrarUsuario"]);
Route::post("/actualizar-Usuarios",[UsuarioController::class,"actualizar"]);


Route::get("/EliminarUsuario/{id}",  [UsuarioController::class,"MostrarUsuarioElimminar"],["id"=>"id"]);
Route::post("/Eliminar_Usuario", [UsuarioController::class,"Eliminar"]);


/*Documentos*/
Route::view("/ingresoDocumentos","IngresarDocumento");

Route::post("ingresar_Documento",[DocumentoController::class,"guardarr"])->name("Guardar_Documento");

Route::get("/MostrarDocumento",[DocumentoController::class,"mostrar"]);

Route::get("/ingresoDocumentos/{idcolua}",function (int $idcolua){
    return view("ingresoDocumentos")->with("idcolumna",$idcolua);
});
Route::get("/ActualizarDocumento/{id}",[DocumentoController::class,"mostrarDocumento"]);
Route::post("/ActualizarDocumento",[DocumentoController::class,"actualizar"]);

Route::get("/EliminarDocumento/{id}",  [DocumentoController::class,"MostrarUsuarioElimminar"],["id"=>"id"]);
Route::post("/EliminarDocumento", [DocumentoController::class,"Eliminar"]);


Route::view("/subir-archivos","subirArchivo");
Route::post("/subir-archivos",function (Request $request){
    return $request->file("archivo")->store("prueba");
});

/*Detalles de documentos*/

Route::get("/MostrarDetallesDoc",[DetallesDeDocumentoController::class,"mostrar"]);

/*Login-cliente*/
/*Route::get( "/empleado-login","empleadologin");*/
Route::view('dashhboard','dasboard');
Route::view("/ModuloCliente","Modulo_Cliente_PRUEBA");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
