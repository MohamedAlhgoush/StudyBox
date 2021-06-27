<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Major;
use App\University;
use App\Faculty;

class MajorController extends Controller {

    public function all($uni_id) {
        $university = University::find($uni_id);
        return view('users.majors.all_majors', compact('university'));
    }

    public function single($uni_id, $major_id) {
        $major = Major::with('courses')
            ->find($major_id);
        return view('users.majors.single_major', compact('major'));
    }

    public function getJsonMajors($faculty_id) {
        $majors = Faculty::find($faculty_id)->majors;
        return response()->json(["data" => $majors]);
    }
}
