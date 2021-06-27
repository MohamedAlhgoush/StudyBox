<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Upload;
class StudentController extends Controller {

    public function viewInStudentProfile($uni_id,$id) {
      $user=Auth::user();
      $uploads=Upload::where('student_id',$id)->get();


        return view('users.student.student_profile',compact('user','uploads'));
    }


    public function edit($uni_id,$id)
    {

      $user = User::find($id);
      return view('/users.edit.edit_profile',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
       ]);

        try {
          $user=User::find($id);
          $user->name = $request->name;
          $user->email = $request->email;


           $user->save();

            return redirect()->back()->with('success', 'Profile was edited successfully');

          }

         catch (\Exception $e) {
          return redirect()->back()->with('error', 'email was used befor');
        }
    }







}
