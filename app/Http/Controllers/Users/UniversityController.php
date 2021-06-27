<?php

namespace App\Http\Controllers\Users;

use App\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UniversityController extends Controller {

    public function single($uni_id) {
        $uni = University::find($uni_id);
        return view('users.universities.single_university', compact('uni'));

    }
    public function addUniversity() {
        
        return view('admin.create_university');

    }

    public function createuniversity(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'short_name' => 'required|max:5',
            'descritption' => 'required',
        ]);

        $university = new University;
  
        $university->name = $request->name;
        $university->short_name = $request->short_name;
        $university->descritption = $request->description;
  
        
        $university->save();
        return redirect()->back()->with('success', 'University was added successfully');
      }
 
}
