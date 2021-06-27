<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\University;
use App\Faculty;
use App\Major;
use App\Course;
use App\User;
use App\Upload;
use App\File;
use Auth;
use App\UploadFile;
use App\Category;
use App\UploadCategory;
use App\Vote;

class UploadController extends Controller
{

    public function viewUploadFile($uni_id)
    {
        $faculties = University::find($uni_id)->faculties;
        $instructors = User::where('role', 2)->get();
        $categories = Category::all();
        return view('/users.files.upload_document', compact('faculties', 'instructors', 'categories'));
    }

    public function uploadFile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'year' => 'required',
            'course' => 'required',
            'semester' => 'required',
            'description' => 'required',
        ]);



        try {

            $upload = new Upload();
            $user = Auth::user();

            $main = 1;
            if ($user->role == 2) {
                $upload->instructor_id = $user->id;

            } else if ($user->role == 1 || $user->role == 3 ) {
                $upload->student_id = $user->id;
                $upload->instructor_id = $request->instructor_id;
                $main = 0;

            } else {
                return redirect()->back();
            }

            $upload->name = $request->name;
            $upload->year = $request->year;
            $upload->semester = $request->semester;
            $upload->main = $main;
            $upload->status = "Available";
            $upload->description = $request->description;
            $upload->course_id = $request->course;

            if ($upload->save()) {
                $categoryRespone = $this->handleCategory($request, $upload);
                $fileRespone = $this->handleFiles($request, $upload);
                if ($fileRespone) {
                    return redirect()->back()->with('success', 'Document was uploaded successfully');
                }
            }

        } catch (\Exception $e) {
            return $e;
        }
    }

    private function handleFiles($request, $upload)
    {
        if ($request->hasFile('file')) {

            $requestedFile = $request->file('file');
            //$mainName = $requestedFile->getClientOriginalName();
            $extension = $requestedFile->getClientOriginalExtension();
            $savedName = Auth::user()->id . '_' . time() . '.' . $extension;
            $requestedFile->move(public_path('uploads'), $savedName);

            $file = new File;
            $file->name = $savedName;
            $file->extension = $extension;
            $file->size = 11;
            $file->path = "ss";

            if ($file->save()) {
                $uploadFile = new UploadFile();
                $uploadFile->file_id = $file->id;
                $uploadFile->upload_id = $upload->id;
                $uploadFile->save();
                return true;
            }
        }
    }

    private function handleCategory($request, $upload)
    {
        $uploadCategory = new UploadCategory();
        $uploadCategory->category_id = $request->category_id;
        $uploadCategory->upload_id = $upload->id;
        if ($uploadCategory->save()) {
            return true;
        }
        return false;
    }


    public function delete($uni_id, $upload_id)
    {
        $upload = Upload::find($upload_id);
        $upload->files()->delete();
        $upload->delete();
        return redirect()->back()->with('success', 'Document was deleted successfully');
    }


    public function edit($uni_id, $file_id)
    {

        $upload = Upload::find($file_id);
        $current_course = $upload->course;
        $current_major = $current_course->major;
        $current_faculty = $current_major->faculty;

        $faculties = University::find($uni_id)->faculties;
        $instructors = User::where('role', 2)->get();
        $categories = Category::all();

        return view('/users.edit.edit_upload', compact('upload', 'faculties', 'instructors', 'categories', 'current_course', 'current_major', 'current_faculty'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'year' => 'required',
            'semester' => 'required',
            'description' => 'required',
        ]);

        try {
            $upload = Upload::find($id);
            $current_category_id = $upload->categories()->first()->id;
            $current_category = UploadCategory::where('upload_id', $id)->where('category_id', $current_category_id)->first();
            $user = Auth::user();
            $main = 1;
            if ($user->role == 2) {
                $upload->instructor_id = $user->id;

            } else if ($user->role == 1 || $user->role == 3) {
                $upload->student_id = $user->id;
                $upload->instructor_id = $request->instructor_id;
                $main = 0;

            } else {
                return redirect()->back();
            }

            $upload->name = $request->name;
            $upload->year = $request->year;
            $upload->semester = $request->semester;
            $upload->main = $main;
            $upload->status = "Available";
            $upload->description = $request->description;
            $upload->course_id = $request->course;

            if ($upload->save()) {
                if ($current_category->delete()) {
                    $upload->categories()->attach($request->category_id);
                }
                return redirect()->back()->with('success', 'Document was edited successfully');

            }

        } catch (\Exception $e) {
            return $e;
        }
    }

}
