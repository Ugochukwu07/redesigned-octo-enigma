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

    public function contact($purpose = ""){
        return view('errors.404');
    }

    public function services(){
        return view('errors.404');
    }

    public function branding(){
        return view('errors.404');
    }

    public function mobile(){
        return view('services.mobile');
    }

    public function web(){
        return view('errors.404');
    }

    public function digital(){
        return view('errors.404');
    }
}
