<?php

namespace App\Http\Controllers;

use App\Models\User_domicilio;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User_domicilio::all()->load('user');
        foreach ($users as $user){
            $edad = $this->CalculaEdad($user->user->fecha_nacimento);
            $user->user['edad'] = $edad;
        }
        return response()->json(['users' => $users ],200);
    }

    function CalculaEdad( $fecha ) {
        list($Y,$m,$d) = explode("-",$fecha);
        return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
    }
}
