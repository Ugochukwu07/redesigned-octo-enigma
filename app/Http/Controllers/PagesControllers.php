<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;

class PagesControllers extends Controller
{
    //Normal Pages
    public function index(){
        return view('index');
    }

    public function portfolio(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(40);
        $departments = Department::all();
        return view('portfolio', [
            'portfolios' => $portfolios,
            'departments' => $departments
        ]);
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
        $departments = Department::all();
        return view('contact', [
            'purpose' => $purpose,
            'departments' => $departments
        ]);
    }

    public function services(){
        return view('errors.404');
    }

    public function branding(){
        $portfolios = Portfolio::where('department_id', 4)->orderBy('created_at', 'desc')->paginate(40);
        return view('services.graphics', [
            'portfolios' => $portfolios
        ]);
    }

    public function mobile(){
        $portfolios = Portfolio::where('department_id', 5)->orderBy('created_at', 'desc')->paginate(40);

        return view('services.mobile', [
            'portfolios' => $portfolios
        ]);
    }

    public function web(){
        $portfolios = Portfolio::where('department_id', 6)->orderBy('created_at', 'desc')->paginate(40);

        return view('services.web', [
            'portfolios' => $portfolios
        ]);
    }

    public function digital(){
        return view('errors.404');
    }

    //Auth
    public function login(){
        return view('auth.login');
    }
}
