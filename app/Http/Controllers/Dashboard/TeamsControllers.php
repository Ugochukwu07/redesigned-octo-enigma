<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Members;
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
    public function TeamMembers(){

        $teamMember = Members::all();
        return view('dashboard.team.index', ['teamMember' => $teamMember]);
    }

    public function addTeamMember(){
        $memberStatus = MemberStatus::all();
        return view('dashboard.team.add', ['memberStatus' => $memberStatus]);
    }

    public function addTeamMemberSave(Request $request){
        //dd($request->input('image'));
        
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email|unique:members,email',
            'status' => 'numeric',
            'facebook_link' => 'url',
            'twitter_link' => 'url',
            'linkedkin_link' => 'url',
            'github_link' => 'url',
            'description' => 'required'
        ]);
        
        //Add members
        if($request->file('image')) {
            $file = $request->file('image');

            //$filename = time().'_'.$file->getClientOriginalName();
            $filename = $file->hashName();

            // File upload location
            $location = 'storage/teams';

            // Upload file
            $file->move($location,$filename);

            $member = Members::create([
                'image' => $location . '/' . $filename,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'member_status_id' => $request->input('status'),
                'facebook_link' => $request->input('facebook_link'),
                'twitter_link' => $request->input('twitter_link'),
                'linkedin_link' => $request->input('linkedin_link'),
                'github_link' => $request->input('github_link'),
                'description' => $request->input('description'),
                'users_id' => auth()->user()->id
            ]);

            //Notify Member

            toastr()->success('Member Added Successfully');
            
            return redirect()->route('dashboard.team.all');
        }else{
            toastr()->error('File upload failed');
            return back();
        }
    }

    //edit
    public function editTeamMember($id){
        $member = Members::find($id);

        $memberStatus = MemberStatus::all();

        return view('dashboard.team.edit', [
            'member' => $member,
            'memberStatus' => $memberStatus
        ]);
    }

    //save edit
    public function editTeamMemberSave(Request $request){
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email|unique:members,email,' . $request->input('users_id'),
            'status' => 'required|numeric',
            'facebook_link' => 'url',
            'twitter_link' => 'url',
            'linkedkin_link' => 'url',
            'github_link' => 'url',
            'description' => 'required'
        ]);
    }

    //Delete Member
    public function deleteTeamMember($id){
        $member = Members::find($id);

        $member->delete();
        toastr()->success('Member has been deleted successfully.');
        
        return back();
    }
}
