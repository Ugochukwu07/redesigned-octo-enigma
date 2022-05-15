<?php

namespace App\Http\Controllers\Dashboard;

use stdClass;
use App\Models\Members;
use App\Models\MemberStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\NewTeamMember;
use Illuminate\Support\Facades\File;

class TeamsControllers extends Controller
{
    //Status for team mebers
    public function addStatus(){
        return view('dashboard.team.status.add');
    }

    public function addStatusSave(Request $request){
        $request->validate([
            'name' => 'required|unique:member_status,name',
            'description' => 'required',
            'department' => 'required|numeric'
        ]);

        //save to database
        MemberStatus::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'department' => $request->input('department'),
            'users_id' => auth()->user()->id
        ]);

        //return redirect()->route('dashboard.team.status.all');
        //tostr
        toastr()->success('Added Memebr Status successfully');
        return redirect()->route('dashboard.team.add');
    }

    public function updateStatus(){
        return view('dashboard.team.status.update');
    }

    public function updateStatusSave(Request $request){
        $request->validate([
            'name' => 'required|unique:member_status,name',
            'description' => 'required',
            'department' => 'required|numeric'
        ]);

        //save to database
        MemberStatus::where('id', $request->input('status_id'))->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'department' => $request->input('department'),
            'users_id' => auth()->user()->id
        ]);

        //return redirect()->route('dashboard.team.status.all');
        //tostr
        toastr()->success('Updated Memebr Status successfully');
        return redirect()->route('dashboard.team.all');
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
            $member = Members::where('email', $request->input('email'))->first();
            $memberData = [
                'body' => 'Your profile has been successfully uploaded to ' . config('app.name') . ' as a team member.',
                'text' => 'View Profile',
                'url' => route('team.single', ['id' => $member->id]),
                'thankYou' => 'Thank you foe joing ' . config('app.name') . ". We're happy to have you."
                
            ];
            $member->notify(new NewTeamMember($memberData);

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
            'description' => 'required',
            'member_id' => 'required'
        ]);

        $image = Members::select('image')->where('id', $request->input('member_id'))->first();

        if($request->file('image')) {
            //delete the old file data
            if($image->image != ''){
                File::delete($image->image);
            }

            $file = $request->file('image');

            //$filename = time().'_'.$file->getClientOriginalName();
            $filename = $file->hashName();

            // File upload location
            $location = 'storage/teams';

            // Upload file
            $file->move($location,$filename);
            $fullLocation = $location . '/' . $filename;
        }else{
            $fullLocation = $image->image;
        }

        Members::where('id', $request->input('member_id'))->update([
            'image' => $fullLocation,
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

        toastr()->success('Member Updated Successfully');
                
        return redirect()->route('dashboard.team.all');
    }

    //Delete Member
    public function deleteTeamMember($id){
        $member = Members::find($id);
        $image = Members::select('image')->where('id', $id)->first();

        File::delete($image->image);

        $member->delete();
        toastr()->success('Member has been deleted successfully.');
        
        return back();
    }
}
