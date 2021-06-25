<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class usercontroller extends Controller
{
    public  function  savee(Request $dato){

        $contrar = Hash::make($dato->password);
        $dato->validate(
            [
                'name'=>'required |alpha|min:3|max:30',
                'apellido'=>'required |alpha |min:3|max:30',
                'password'=>'required ',
                'dni'=>'required |min:8|numeric',
                'telefono'=>'required |min:9|numeric ',
            ]
        );
        $usio = new User();
        $usio ->name = $dato->name;
        $usio ->apellido = $dato->apellido;
        $usio ->email = $dato->email;
        $usio ->password = $contrar;
        $usio ->dni = $dato->dni;
        $usio ->telefono = $dato->telefono;
        $usio ->type = $dato->type;

        $usio -> save();
        return redirect("AddUsers");
    }






    public  function mostrarrr(){
        if( Auth::user()->id == 1){
            $result = User::all();
        }else{
            $result = User::all( )->where("id","<>",1 );
        }

        return  view("Mostraruser",["result"=>$result]);
    }


    public function updd(int $id){
        $resultados = User::where("id",$id )->first();
        return view("UpdateUsers",["dato"=>$resultados]);
    }
    public function updateuseree(Request $request){


        $request->validate(
            [
                'name'=>'required |alpha|min:3|max:150',
                'apellido'=>'required |alpha |min:3|max:150',
                'email'=>'required  |min:10 |max:300',
                'telefono'=>'required  |numeric ',
                'dni'=>'required  |numeric ',
            ]
        );
        $usuar=User::find($request->id);
        echo $usuar->password;
        $password = Hash::make('secret');
        $usuar->name = $request->name;
        $usuar->apellido = $request->apellido;
        $usuar->email = $request->email;
        $usuar->telefono = $request->telefono;
        $usuar->dni = $request->dni;
        $usuar->type = $request->type;
        $usuar->save();
        return redirect("MostrarUsers");
    }

    public function ViewUserdele(int $id)
    {
        $resultados = User::where("id", $id)->first();
        return view("DeleteUsers", ["ddt" => $resultados]);
    }

    Public function DeleteUsre(Request $request){
        $uso=User::findOrFail($request->id);
        $uso->delete();
        return redirect("/MostrarUsers");
    }



}
