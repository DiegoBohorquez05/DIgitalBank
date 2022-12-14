<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function update(Request $request){
        $transaction = Transaction::create([
            'name' => $request->name,
            'money' => $request->money,
        ]);
    }
}
