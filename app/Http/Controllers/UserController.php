<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $transaction = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'money' => $request->money,
            'password' => $request->password,
        ]);
    }

    public function show($id,$valorResta){
        $balanceUser = user::find($id)->money;

        if($valorResta > $balanceUser){
            return 'No se puede hacer la transferencia';
        }else{
            $resultadoResta = $balanceUser-$valorResta;
            
            user::where('id', $id)
            ->update([
                'money' => $resultadoResta,
            ]);
            return $resultadoResta;
        }
    }

    public function index(Request $request){

        $usuarioEnviar=user::find([
            'id'=>$request->id,
        ]);

        //Guardar el valor que se va a enviar

        function x ($request , $usuarioEnvia){
            $valor = $request->valor;
        }
        
        return $usuarioEnvia;
        
    } 
}
