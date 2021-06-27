<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Upload;
use App\UserDownload;
use Auth;

class UserController extends Controller {

    public function myUploads($uni_id) {
        $user = Auth::user();
        $uploads = Upload::when($user->role, function($query) use ($user){
          switch($user->role){
            case 1 :
              $query->where('student_id',$user->id);
            break;
            case 2 :
              $query->where('instructor_id',$user->id);
            break;
          }
        })->with('categories')->orderBy('uploads.id', 'ASC')->get();

        return view('users.shared.my_uploads', compact('uploads'));
    }

}
