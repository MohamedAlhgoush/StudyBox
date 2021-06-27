<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    protected $table = "courses";
    protected $fillable = ['name', 'code', 'description'];

    public function major() {
        return $this->belongsTo('App\Major');
    }

    public function uploads() {
        return $this->hasMany('App\Upload', 'course_id');
    }

}
