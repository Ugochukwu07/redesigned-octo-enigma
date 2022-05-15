<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Members;
use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    //Normal Pages
    public function index(){
        return view('index');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function team(){
        $owners = Members::where('admin', 1)->get();
        $teams = Members::where('admin', 0)->get();
        return view('team.index', [
            'owners' => $owners,
            'teams' => $teams
        ]);
    }

    public function teamSingle($id){
        $member = Members::where('id', $id)->first();
        return view('team.single', [
            'member' => $member
        ]);
    }

    public function contact($purpose){
        return view('contact', ['purpose' => $purpose]);
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
