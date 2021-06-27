<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Upload extends Model {
    protected $table = "uploads";

    protected $fillable = ['name', 'year', 'semester', 'main', 'status', 'description',];




    public function course() {
        return $this->belongsTo('App\Course');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'upload_categories');
    }

    public function files() {
        return $this->belongsToMany('App\File', 'upload_files');
    }

    public function instructor() {
        return $this->belongsTo('App\User', 'instructor_id');
    }

    public function student() {
        return $this->belongsTo('App\User', 'student_id');
    }

    public function user_downloads() {
        return $this->belongsToMany('App\User', 'user_downloads', 'upload_id');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
    public function votes()
    {
        return $this->hasOne('App\Vote');
    }

}
