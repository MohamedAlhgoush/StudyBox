<?php

namespace App\Http\Controllers\Users;

use App\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload;

use App\Comment;
use App\UserVote;
use Auth;
use App\UserDownload;

class FileController extends Controller
{


    public function viewUploadFile($uni_id)
    {
        return view('users.files.upload_document');
    }

    public function all()
    {
        //todo this function will return all_files view with list of all files
        return view('users.files.all_files');
    }

    public function single($uni_id ,$id)
    {
        $upload = Upload::find($id);
        $comments = Comment::where('upload_id', $id)->orderBy('created_at', 'desc')->get();
        //todo this function will return single file and desc about it + download button
        return view('users.files.single_file', compact('upload', 'comments'));
    }

    public function download($upload_id) {
        $upload = Upload::find($upload_id);
        $file_id = $upload->files()->first()->id;
        $file = File::find($file_id);
        $mydownload = new UserDownload;
        $mydownload->user_id = Auth::user()->id;
        $mydownload->upload_id = $upload_id;
        if($mydownload->save()){
            $downloadPath = '../public/uploads/'.$file->name;
            $name = basename($downloadPath);

            if(file_exists( $downloadPath )){
                return response()->download($downloadPath, $name);
            }
        }
        return redirect()->back()->with('error','Not exist');
    }
      public function vote(Request $request, $uni_id , $id) {

        $vote=UserVote::where('upload_id', $id)->where('user_id',Auth::user()->id )->first();
        if($vote){
          if($request->type == "helpfull"){
            $vote->helpfull=1;
            $vote->un_helpfull=0;
          }else{
            $vote->un_helpfull=1;
              $vote->helpfull=0;
          }
          $vote->save();
        }else{
          $user_vote = new UserVote();
          if($request->type == "helpfull"){
            $user_vote->helpfull=1;
            $user_vote->un_helpfull=0;
          }else{
            $user_vote->un_helpfull=1;
            $user_vote->helpfull=0;
          }
          $user_vote->upload_id = $id;
          $user_vote->user_id= Auth::user()->id;
          $user_vote->save();
        }
         return redirect()->back()->with('success', 'Thank you for your vote');
    }

    public function view($id) {

      $upload = Upload::find($id);
      $file_id = $upload->files()->first()->id;
      $file = File::find($file_id);
      $name=$file->name;
      $ext=$file->extension;

      return view('users.files.view_document',compact('name','ext'));

  }
  public function viewPdf($uni_id,$id)
  {

    $upload=Upload::find($id);

      return view('users.files.view_pdf',compact('upload'));
  }

}
