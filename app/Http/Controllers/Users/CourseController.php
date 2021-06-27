<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use App\Course;
use App\Major;
use App\University;
use App\Faculty;

class CourseController extends Controller {

    public function all($uni_id) {
        $university = University::
        with(['faculties', 'faculties.majors', 'faculties.majors.courses'=> function($query) {
        $query->orderBy('name');}])->orderBy('name')->find($uni_id);


        return view('users.courses.all_courses', compact('university'));
    }

    public function single($uni_id,$major_id,$course_id) {
     
        $course = Course::find($course_id);
        $exams = $this->exams($course);
        $assignments = $this->assignments($course);
        $lectures = $this->lectures($course);
        $projects = $this->projects($course);
        $quizzes = $this->quizzes($course);
        $syllabuses = $this->syllabuses($course);
        $books = $this->books($course);
        return view('users.courses.single_course', compact('exams', 'assignments', 'lectures', 'projects', 'quizzes', 'syllabuses', 'books'));
    }


    private function books($course) {
        $booksCategory = Category::where('name', 'Book')
            ->first();
            if ($booksCategory==null) {
              return null;
            }
        $books = $course->uploads()
            ->whereHas('categories', function ($query) use ($booksCategory) {
                $query->where('categories.id', $booksCategory->id);
            })
            ->get();
        return $books;
    }


    private function syllabuses($course) {
        $syllabusesCategory = Category::where('name', 'Syllabus')
            ->first();
        if ($syllabusesCategory==null) {
              return null;
            }
        $syllabuses = $course->uploads()
            ->whereHas('categories', function ($query) use ($syllabusesCategory) {
                $query->where('categories.id', $syllabusesCategory->id);
            })
            ->get();
        return $syllabuses;
    }


    private function quizzes($course) {
        $quizzesCategory = Category::where('name', 'Quizzes')
            ->first();
      if ($quizzesCategory==null) {
                  return null;
                }
        $quizzes = $course->uploads()
            ->whereHas('categories', function ($query) use ($quizzesCategory) {
                $query->where('categories.id', $quizzesCategory->id);
            })
            ->get();
        return $quizzes;
    }

    private function projects($course) {
        $projectsCategory = Category::where('name', 'Projects')
            ->first();
        if ($projectsCategory==null) {
                        return null;
                      }
        $projects = $course->uploads()
            ->whereHas('categories', function ($query) use ($projectsCategory) {
                $query->where('categories.id', $projectsCategory->id);
            })
            ->get();
        return $projects;
    }


    private function lectures($course) {
        $lecturesCategory = Category::where('name', 'Lectures')
            ->first();
            if ($lecturesCategory==null) {
                  return null;
          }
        $lectures = $course->uploads()
            ->whereHas('categories', function ($query) use ($lecturesCategory) {
                $query->where('categories.id', $lecturesCategory->id);
            })
            ->get();
        return $lectures;
    }

    private function exams($course) {
        $examsCategory = Category::where('name', 'Exams')
            ->first();
            if ($examsCategory==null) {
                  return null;
          }
        $exams = $course->uploads()
            ->whereHas('categories', function ($query) use ($examsCategory) {
                $query->where('categories.id', $examsCategory->id);
            })
            ->get();
        return $exams;
    }

    private function assignments($course) {
        $assignmentsCategory = Category::where('name', 'Assignment')
            ->first();
            if ($assignmentsCategory==null) {
                  return null;
          }
        $assignments = $course->uploads()
            ->whereHas('categories', function ($query) use ($assignmentsCategory) {
                $query->where('categories.id', $assignmentsCategory->id);
            })
            ->get();
        return $assignments;
    }

    public function addCourse($uni_id) {
        $faculties=Faculty::where('uni_id',$uni_id)->get();

        
        return view('users.courses.add_course', compact('faculties'));
    }


    public function createCourse(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:4',
            'code' => 'required|max:8',
            'description' => 'required|min:10',
        ]);

      $course = new Course;

      $course->name = $request->name;
      $course->code = $request->code;
      $course->description = $request->description;

      $course->major_id = $request->major_id;
      $course->save();
      return redirect()->back();
    }
    public function UpdateCourse($uni_id,$id,Request $request) {
        $course = Course::find($id);
  
        $course->name = $request->name;
        $course->code = $request->code;
        $course->description = $request->description;
  
        $course->major_id = $request->major_id;
        $course->save();
        return redirect()->back()->with('success', 'course was Edited successfully');
      }

    public function getJsonCourses($major_id) {
        $courses = Major::find($major_id)->courses;
        return response()->json(["data" => $courses]);
    }

}
