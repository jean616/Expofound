<?php
use Illuminate\Http\Request;


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
Route::view('/','auth.login');
/*User*/

Route::get("/AddUsers",function (){
    if(!Auth::check()){
        return redirect()->route("login");
    }else{
        return view("CrearUsers");
    }
});
Route::get("/AddUsers/{idcolumna}",function (int $idcolna){
    return view("CrearUsers")->with("idcolumna",$idcolna);
});
Route::post("/pass_Users",[usercontroller::class,"savee"])->name("savee_users");



Route::get("/MostrarUsers",[usercontroller::class,"mostrarrr"]);
Route::get("/Updatee_User/{id}",[usercontroller::class,"updd"]);
Route::post("/Updatee_User",[usercontroller::class,"updateuseree"]);
Route::get("/DeleteUsers/{id}",  [usercontroller::class,"ViewUserdele"],["id"=>"id"]);
Route::post("/deltee", [usercontroller::class,"DeleteUsre"]);

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



/*Documentos*/
Route::view("/ingresoDocumentos","IngresarDocumento");

Route::post("ingresar_Documento",[DocumentoController::class,"guardarr"])->name("Guardar_Documento",);

Route::get("/MostrarDocumento",[DocumentoController::class,"mostrar"]);

Route::get("/ingresoDocumentos/{idcolua}",function (int $idcolua){
    return view("ingresoDocumentos")->with("idcolumna",$idcolua);
});
Route::get("/ActualizarDocumento/{id}",[DocumentoController::class,"mostrarDocumento"]);
Route::post("/ActualizarDocumento",[DocumentoController::class,"actualizar"]);

Route::get("/EliminarDocumento/{id}",  [DocumentoController::class,"MostrarUsuarioElimminar"],["id"=>"id"]);
Route::post("/EliminarDocumento", [DocumentoController::class,"Eliminar"]);


Route::view("/subir-archivos","Archivo");
Route::post("/subir-archivos",[DocumentoController::class,"SubirArchivo"]);
/*
Route::post("/subir-archivos",function (Request $request){
    $nombre = $request->file("archivoss")->getClientOriginalName("prueba");
    $extension = $request->file("archivoss")->extension();
    $request->file("archivoss")->storeAs("public",$nombre);
    return redirect("ingresoDocumentos");
});*/
/*Route::post("/subir-archivos",function (Request $request){
    return $request->file("archivo")->store("prueba");
});*/
/*Detalles de documentos*/

Route::get("/MostrarDetallesDoc",[DetallesDeDocumentoController::class,"mostrar"]);

/*Login-cliente*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
