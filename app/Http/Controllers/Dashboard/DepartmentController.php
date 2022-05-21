<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function all(){
        $departments = Department::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.department.index', [
            'departments' => $departments
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'name' => 'required|unique:departments,name',
            'description' => 'required'
        ]);

        Department::create([
            'name' => $request->name,
            'description' => $request->description,
            'users_id' => auth()->user()->id
        ]);

        toastr()->success('Department Added');
        return back();
    }

    public function edit($department_id){
        $department = Department::where('id', $department_id)->first();

        return view('dashboard.department.edit', [
            'department' => $department
        ]);
    }

    public function editSave(Request $request){
        $request->validate([
            'name' => 'required|unique:departments,name,' . $request->department_id,
            'description' => 'required'
        ]);

        Department::where('id', $request->department_id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'users_id' => auth()->user()->id
        ]);

        toastr()->success('Department Updated');
        return redirect()->route('dashboard.department.all');
    }

    public function delete($department_id){
        $department = Department::find($department_id);

        $department->delete();
        toastr()->success('Department Deleted');
        return back();
    }
}
