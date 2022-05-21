<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfoiloController extends Controller
{
    public function all(){
        $departments = Portfolio::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.department.index', [
            'departments' => $departments
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'name' => 'required|unique:departments,name',
            'description' => 'required'
        ]);

        if($request->file('image')) {
            $file = $request->file('image');

            //$filename = time().'_'.$file->getClientOriginalName();
            $filename = $file->hashName();

            // File upload location
            $location = 'storage/teams';

            // Upload file
            $file->move($location,$filename);

            Portfolio::create([
                'name' => $request->name,
                'description' => $request->description,
                'users_id' => auth()->user()->id
            ]);
        }

        toastr()->success('Department Added');
        return back();
    }

    public function edit($department_id){
        $department = Portfolio::where('id', $department_id)->first();

        return view('dashboard.department.edit', [
            'department' => $department
        ]);
    }

    public function editSave(Request $request){
        $request->validate([
            'name' => 'required|unique:departments,name,' . $request->department_id,
            'description' => 'required'
        ]);

        Portfolio::where('id', $request->department_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'users_id' => auth()->user()->id
        ]);

        toastr()->success('Department Updated');
        return redirect()->route('dashboard.department.all');
    }

    public function delete($department_id){
        $department = Portfolio::find($department_id);

        $department->delete();
        toastr()->success('Department Deleted');
        return back();
    }
}
