<?php
/**
 * Created by PhpStorm.
 * User: ahmad
 * Date: 4/2/2019
 * Time: 9:52 PM
 */


namespace App\Http\Controllers\Users;

use App\Faculty;
use App\Http\Controllers\Controller;
use App\University;

class FacultyController extends Controller {

    public function all() {
        $faculties = Faculty::all();
        return view('users.faculties.all_faculties', compact('faculties'));
    }

    public function single($id) {
        return view('users.faculties.single_faculty');
    }

    public function getJsonFaculties($uni_id) {
        $faculties = University::find($uni_id)->faculties;
        return response()->json(["data" => $faculties]);
    }

}
