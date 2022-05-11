<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MemberStatus;
use Illuminate\Http\Request;
use stdClass;

class TeamsControllers extends Controller
{
    //Status for team mebers
    public function addStatus(){
        return view('dashboard.team.status.add');
    }

    public function addStatusSave(Request $request){
        $request->validate([
            'name' => 'required|unique:member_status,name',
            'description' => 'required'
        ]);

        //save to database
        MemberStatus::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'users_id' => auth()->user()->id
        ]);

        //return redirect()->route('dashboard.team.status.all');
        //tostr
        toastr()->success('Added Memebr Status successfully');
        return redirect()->route('dashboard.team.add');
    }


    //team memebers
    public function TeamMember(){
        return view('dashboard.team.index');
    }

    public function addTeamMember(){
        $memberStatus = MemberStatus::all();
        return view('dashboard.team.add', ['memberStatus' => $memberStatus]);
    }

    public function addTeamMemberSave(Request $request){
        dd($request->all());

        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);
    }
}
