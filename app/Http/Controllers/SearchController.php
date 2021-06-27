<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Faculty;
use App\Major;
use App\Course;
use App\User;
use App\Upload;
use App\Category;

class SearchController extends Controller
{

    public function search( Request $request)
    {
        $universities = University::all();
        $categories = Category::all();
        $faculties = Faculty::all();
        $majors = Major::all();
        $courses = Course::all();
        $instructors = User::all()->where('role', '2');
        $search_query = $request->search_query;
        $category_id = $request->categories;
        $instructor_id = $request->instructors;
        $course_id = $request->courses;
        $semester = $request->semester;
        $year = $request->year;
        if ($request->has('search_query')) {
            $upload_results = Upload::when($category_id != null, function ($query) use ($category_id) {
                $query->whereHas('categories', function ($q) use ($category_id) {
                    $q->where('categories.id', $category_id);
                });
            })->when($instructor_id != null, function ($query) use ($instructor_id) {
                    $query->where('instructor_id', $instructor_id);
                })->when($course_id != null, function ($query) use ($course_id) {
                    $query->where('course_id', $course_id);
                })->when($semester != null, function ($query) use ($semester) {
                    $query->where('semester', $semester);
                })->when($year != null, function ($query) use ($year) {
                    $query->where('year', $year);
                })->where('name', 'LIKE', "%" . $search_query . "%")->get();
        } else {
            $upload_results = Upload::when($category_id != null, function ($query) use ($category_id) {
                $query->whereHas('categories', function ($q) use ($category_id) {
                    $q->where('categories.id', $category_id);
                });
            })->when($instructor_id != null, function ($query) use ($instructor_id) {
                $query->where('instructor_id', $instructor_id);
            })->when($course_id != null, function ($query) use ($course_id) {
                $query->where('course_id', $course_id);
            })->when($semester != null, function ($query) use ($semester) {
                $query->where('semester', $semester);
            })->when($year != null, function ($query) use ($year) {
                $query->where('year', $year);
            })->get();
        }

        return view('users.search', compact( 'categories', 'faculties', 'majors', 'courses', 'instructors', 'upload_results'));
    }
}
