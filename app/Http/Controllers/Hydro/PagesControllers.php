<?php

namespace App\Http\Controllers\Hydro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    //Normal Pages
    public function index(){
        return view('hydro.index');
    }

    public function portfolio(){
        return view('hydro.errors.404');
    }

    public function team(){
        return view('hydro.errors.404');
    }

    public function contact(){
        return view('hydro.errors.404');
    }

    public function services(){
        return view('hydro.errors.404');
    }

    public function branding(){
        return view('hydro.errors.404');
    }

    public function mobile(){
        return view('hydro.errors.404');
    }

    public function web(){
        return view('hydro.errors.404');
    }

    public function digital(){
        return view('hydro.errors.404');
    }
}
