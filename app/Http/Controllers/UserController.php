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
}
