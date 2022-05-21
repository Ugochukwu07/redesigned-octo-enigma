<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Portfolio;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PortfoiloController extends Controller
{
    public function all(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(15);
        $departments = Department::all();

        return view('dashboard.portfolio.index', [
            'portfolios' => $portfolios,
            'departments' => $departments
        ]);
    }

    public function addSave(Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,gif,svg|max:4096',
            'name' => 'required|unique:portfolios,name',
            'description' => 'required',
            'tags' => 'required',
            'department' => 'required|numeric'
        ]);

        if($request->file('file')) {
            $file = $request->file('file');

            //$filename = time().'_'.$file->getClientOriginalName();
            $filename = $file->hashName();

            // File upload location
            $location = 'storage/portfolio';

            // Upload file
            $file->move($location,$filename);

            Portfolio::create([
                'file' => $location . '/' . $filename,
                'name' => $request->name,
                'description' => $request->description,
                'users_id' => auth()->user()->id,
                'tags' => $request->tags,
                'department_id' => $request->department
            ]);
            toastr()->success('Portfoilo Added');
            return back();
        }else{
            toastr()->error('File upload failed');
            return back();
        }
    }

    public function edit($portfolio_id){
        $portfolio = Portfolio::where('id', $portfolio_id)->first();
        $departments = Department::all();
        return view('dashboard.portfolio.edit', [
            'portfolio' => $portfolio,
            'departments' => $departments
        ]);
    }

    public function editSave(Request $request){
        $request->validate([
            'file' => 'mimes:png,jpg,jpeg,gif,svg|max:4096',
            'name' => 'required|unique:portfolios,name,' . $request->portfolio_id,
            'description' => 'required',
            'tags' => 'required',
            'department' => 'required|numeric'
        ]);

        $file = Portfolio::select('file')->where('id', $request->portfolio_id)->first();

        if($request->file('file')) {
            //delete the old file data
            if($file->file != ''){
                File::delete($file->file);
            }

            $file = $request->file('file');

            //$filename = time().'_'.$file->getClientOriginalName();
            $filename = $file->hashName();

            // File upload location
            $location = 'storage/portoilo';

            // Upload file
            $file->move($location,$filename);
            $fullLocation = $location . '/' . $filename;
        }else{
            $fullLocation = $file->file;
        }

        Portfolio::where('id', $request->portfolio_id)->update([
            'file' => $fullLocation,
            'name' => $request->name,
            'description' => $request->description,
            'users_id' => auth()->user()->id,
            'tags' => $request->tags,
            'department_id' => $request->department
        ]);

        toastr()->success('Portfolio Updated');
        return redirect()->route('dashboard.portfolio.all');
    }

    public function delete($portfolio_id){
        $portfolio = Portfolio::find($portfolio_id);

        $portfolio->delete();
        toastr()->success('Portfolio Deleted');
        return back();
    }
}
