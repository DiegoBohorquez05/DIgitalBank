<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
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

    public function index(Request $request){

        $usuarioEnviar=user::find($request->id);
        $valorResta=($request->valorResta);
        $usuarioReceives=user::find($request->idReceives);
        $balanceUserSend = user::find($request->id)->money;
        $balanceUserReceive = user::find($request->idReceives)->money;

        if($valorResta > $balanceUserSend){
            return 'No se puede hacer la transferencia';
        }else{
            $resultadoResta = $balanceUserSend-$valorResta;
            $resultadoSuma = $balanceUserReceive+$valorResta;
            
            user::where('id', $request->id)
            ->update([
                'money' => $resultadoResta,
            ]);

            user::where('id', $request->idReceives)
            ->update([
                'money' => $resultadoSuma,
            ]);

            //crear transaccion
            $transaction = Transaction::create([
                'user_id_send' =>($request->id),
                'money' => ($request->valorResta),
                'user_id_receives' =>($request->idReceives),
            ]);

            return $transaction;
            
        }
    }
}
