<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    public  function mostrarrr(){
        $result = User::all( ) ;
        return  view("Mostraruser",["result"=>$result]);
    }
}
