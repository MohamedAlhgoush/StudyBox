<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model {
    protected $table = "majors";
    protected $fillable = ['name'];

    /**
     * Get the faculty that owns the major.
     */
    public function faculty() {
        return $this->belongsTo('App\Faculty','fac_id');
    }

    /**
     * Get the courses for the major.
     */
    public function courses() {
        return $this->hasMany('App\Course', 'major_id');
    }

}
