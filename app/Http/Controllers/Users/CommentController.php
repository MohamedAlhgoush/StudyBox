<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use App\InstructorComments;
use Auth;
class CommentController extends Controller
{

  public function addComment(Request $request,$id) {

    $record=new Comment;
    $user = Auth::user();
    $comment=$request->comment;
    $user_id=$user->id;
    $record->message=$comment;
    $record->user_id=$user_id;
    $record->upload_id=$id;
    $record->save();
    return redirect()->back()->with('success', 'you comment successfully');

  }

    public function addinstructorComment(Request $request,$id) {
      if (Auth::check())
{
  $record=new InstructorComments;
  $user = Auth::user();
  $comment=$request->comment;
  $user_id=$user->id;
  $record->message=$comment;
  $record->user_id=$user_id;
  $record->instructor_id=$id;
  $record->save();
  return redirect()->back()->with('success', 'you comment successfully');

}
  return redirect()->back()->with('error', 'please login first');

    }
}
