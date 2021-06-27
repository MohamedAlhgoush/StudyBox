<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model {
    protected $table = "faculties";
    protected $fillable = ['name'];


    /**
     * Get the university that owns the faculty.
     */
    public function university() {
        return $this->belongsTo('App\University','uni_id');
    }

    /**
     * Get the major for the faculty.
     */
    public function majors() {
        return $this->hasMany('App\Major', 'fac_id');
    }

    /**
     * Get the user for the faculty.
     */
    public function users() {
        return $this->belongsToMany('App\User', 'faculty_user', 'fac_id');
    }
}
