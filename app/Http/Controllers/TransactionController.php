<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class TransactionController extends Controller
{
    public function update(Request $request){
        $transaction = Transaction::create([
            //Nombre del usuario al que se le va a transferir
            'name' => $request->name,
            //Cantidad de plata que se va a transferir
            'money' => $request->money,
            //ID del usuario al que se le va a transferir
            'user_id_receives' => $request->id_Usuario2,
        ]);
    }
}
