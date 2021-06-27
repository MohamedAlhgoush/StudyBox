<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Course;
use App\Auth;
use App\University;
use App\Major;
use App\Faculty;
use App\ContactUs;

class AdminController extends Controller
{

  public function availableCourse($uni_id) {
    $university = University::
    with(['faculties', 'faculties.majors', 'faculties.majors.courses'])
        ->find($uni_id);
    return view('admin.available_courses',compact('university'));
  }
  public function availableUniversities($uni_id) {
    $universities = University::all();

    return view('admin.available_universities',compact('universities'));
  }
  public function deleteUniversity($uni_id,$id) {
    $University=University::find($id);
    $University->delete();
    return redirect()->back()->with('success', 'University was removed successfully');
  }

  public function availableFaculties($uni_id) {
    $faculties = Faculty::where('uni_id',$uni_id)->get();

    return view('admin.available_faculties',compact('faculties'));
  }
  public function deleteFaculties($uni_id,$id) {
    $Faculty=Faculty::find($id);
    $Faculty->delete();
    return redirect()->back()->with('success', 'Faculty was removed Successfully');
  }
  public function deleteMajor($uni_id,$id) {
    $major=Major::find($id);
    $major->delete();
    return redirect()->back()->with('success', 'Major was removed Successfully');
  }
  public function viewUsers() {
    $users=User::all();
    return view('admin.user', compact('users'));
  }

  public function deleteUser($uni_id,$id) {
    $user=User::find($id);
    $user->delete();
    return redirect()->back()->with('success', 'User was removed Successfully');
  }

  public function deleteCourse($uni_id,$id) {
    $course=Course::find($id);
    $course->delete();
    return redirect()->back()->with('success', 'Course was deleted Successfully');
  }

  public function EditCourse($uni_id,$id) {


    $faculties = Faculty::with('majors')->where('uni_id',$uni_id)->get();

    $curent_major=Course::find($id)->major;
 $course=Course::find($id);
    return view('admin.edit_course',compact('course','curent_major','faculties'));
  }

  public function viewAddFaculty($uni_id) {
    $university=University::find($uni_id);
    return view('admin.addfaculty',compact('university'));
  }
  public function addFaculty($uni_id,Request $request) {

      $this->validate($request, [
          'name' => 'required',
      ]);

    $record=new Faculty;
    $record->name=$request->name;
    $record->uni_id=$uni_id;
    $record->save();
    return redirect()->back()->with('success', 'Successfully Added a Faculty');

  }

  public function viewAddMajor($uni_id) {
    $university=University::find($uni_id);
    $faculties=Faculty::where('uni_id',$uni_id)->get();
    return view('admin.addMajor',compact('faculties'));
  }
  public function addMajor(Request $request) {

      $this->validate($request, [
          'name' => 'required',
      ]);
    $record=new Major;
    $record->name=$request->name;
    $record->fac_id=$request->faculty;
    $record->save();
    return redirect()->back()->with('success', 'Successfully Added a Major');

  }
  public function contactus(Request $request) {
      $this->validate($request, [
          'name' => 'required|min:3',
          'email' => 'required|email',
          'subject' => 'required|max:20',
          'message' => 'required|min:10',
      ]);
  $record=new ContactUs;
  $record->name=$request->name;
  $record->email=$request->email;
  $record->message=$request->message;
  $record->subject=$request->subject;
  if(  $record->save() ){
return redirect()->back()->with('success','Thank you for contacting us, your message will be reviewed shortly!');
  }
  else{return redirect()->back()->with('error','oops ');}


  }
  public function viewmessages($uni_id) {
    $university=University::find($uni_id);

    $messages=ContactUs::all();


    return view('admin.viewmessages',compact('messages','university'));
  }


  public function read($uni_id,$id) {


    $message=ContactUs::find($id);
    $message->delete();
    return redirect()->back()->with('success','Deleted Message Successfully');
  }

}
