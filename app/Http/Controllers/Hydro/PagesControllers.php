<?php

namespace App\Http\Controllers\Hydro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function index(){
        return view('hydro.index');
    }
}
