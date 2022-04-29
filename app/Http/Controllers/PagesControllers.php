<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    //Normal Pages
    public function index(){
        return view('index');
    }

    public function portfolio(){
        return view('errors.404');
    }

    public function team(){
        return view('errors.404');
    }

    public function contact(){
        return view('errors.404');
    }

    public function services(){
        return view('errors.404');
    }

    public function branding(){
        return view('services.graphics');
    }

    public function mobile(){
        return view('services.mobile');
    }

    public function web(){
        return view('services.web');
    }

    public function digital(){
        return view('errors.404');
    }

    //Auth
    public function login(){
        return view('auth.login');
    }
}
