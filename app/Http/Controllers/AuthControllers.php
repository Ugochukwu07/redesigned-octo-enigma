<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function loginCheck(Request $request){
        //Vaidate Resquest
        $request->validate([
            'email' => 'email|required',
            'password' => 'min:6|max:16|required'
        ]);
    }
}
