<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\transaction;

class TransactionController extends Controller
{
    public function create(Request $request){
        $transaction = Transaction::create([
            'user_id_send' => user::find($request->id)->id,
            'money' => user::find($request->valorResta),
            'user_id_receives' => user::find($request->idReceives)->id,
        ]);
    }
}
