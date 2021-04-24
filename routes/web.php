<?php


use App\Models\Detalles_de_documento;
use App\Models\Documento;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetallesDeDocumentoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\UsuarioController;
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
/*Usuarios*/
Route::view("/ingresoUsuarios","IngresarUsuarios");

Route::post("/ingresara_Usuarios",[UsuarioController::class,"guardar"])->name("Guardar_Usuarios");

Route::get("/MostrarUsuarios",[UsuarioController::class,"mostrar"]);

/*Documentos*/
Route::view("/ingresoDocumentos","IngresarDocumento");

Route::post("ingresar_Documento",[DocumentoController::class,"guardarr"])->name("Guardar_Documento");

Route::get("/MostrarDocumento",[DocumentoController::class,"mostrar"]);

/*Detalles de documentos*/
Route::view("/ingresoDocumentos","IngresarDocumento");

Route::post("ingresar_Detalles_Doc",[DetallesDeDocumentoController::class,"guardarr"])->name("Guardar_Documento");

Route::get("/MostrarDetallesDoc",[DetallesDeDocumentoController::class,"mostrar"]);
