<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthControllers extends Controller
{
    public function loginCheck(Request $request){
        //Vaidate Resquest
        $request->validate([
            'email' => 'email|required',
            'password' => 'min:6|max:16|required'
        ]);

        //Insert data into database
        $user = new User;
        $user->name = 'Ekwueme Ugochukwu'; //$request->name;
        $user->email = $request->email;
        $user->status = 3;
        $user->password = Hash::make($request->password);
        $save = $user->save();
    }
}
