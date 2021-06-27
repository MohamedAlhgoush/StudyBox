<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Faculty;
use App\FacultyUser;
use App\University;
use App\InstructorVotes;
use App\Upload;
use App\InstructorComments;
use Auth;



class InstructorController extends Controller {
    public function allFaculties() {

    }

    public function all($uni_id) {
        $faculties = Faculty::where('uni_id', $uni_id)
            ->whereHas('users', function ($query) {
                $query->where('role', 2);
            })
            ->get();

        return view('users.instructor.all_instructors', compact('faculties'));
    }

    public function getJsonInstructors($user_id) {
        $instructors = User::all()
            ->where('role', '2');
        return response()->json(["data" => $instructors]);
    }

    public function viewInstructorProfile($uni_id,$id) {
      $user =User::find($id);
      $faculty_user=FacultyUser::where('user_id',$id)->first();
      $faculty=Faculty::find($faculty_user->fac_id);
      $university = University::find($uni_id);
      $uploads = Upload::all()
          ->where('instructor_id', $user->id);
          $comments=InstructorComments::all()->where('instructor_id', $user->id);

        return view('users.instructor.instructor_profile', compact('user','faculty','university','uploads','comments'));
    }


    public function vote(Request $request, $uni_id , $id) {
      if (Auth::check())
    {
      $vote=InstructorVotes::where('instructor_id',$id)->where('user_id' ,Auth::user()->id)->first();
      if($vote){
        if($request->type == "like"){
          $vote->like=1;
          $vote->un_like=0;
        }else{
          $vote->un_like=1;
            $vote->like=0;
        }
        $vote->save();
      }else{
        $user_vote = new InstructorVotes();
        if($request->type == "like"){
          $user_vote->like=1;
          $user_vote->un_like=0;
        }else{
          $user_vote->un_like=1;
          $user_vote->like=0;
        }
        $user_vote->instructor_id = $id;
        $user_vote->user_id= Auth::user()->id;
        $user_vote->save();
      }
       return redirect()->back()->with('success', 'Thank you for your vote');
     }
     return redirect()->back()->with('error', 'please login first');
  }


    public function approveInstructorView($uni_id) {
       $instructors=User::where('status','nonactive')->with(['university'])->get();

        return view('admin.approve_instructor' ,compact('instructors'));
    }
    public function approve($uni_id,$id) {
        $instructor=User::find($id);
         $instructor->status='active';
         $instructor->save();
         return redirect()->back()->with('success', 'instructor was successfully approved');
     }
}
