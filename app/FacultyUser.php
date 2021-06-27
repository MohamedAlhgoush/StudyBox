<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyUser extends Model {
    /**
     * Get the users for the faculty.
     */
    protected $table = "faculty_user";
    public function users() {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get the users for the faculty.
     */
    public function faculties() {
        return $this->belongsTo('App\Faculty', 'fac_id');
    }
}
