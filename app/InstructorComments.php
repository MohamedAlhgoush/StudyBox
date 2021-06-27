<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstructorComments extends Model
{protected $table = "instructor_comments";
  public function upload() {
      return $this->belongsTo('App\Upload');
  }

  public function user() {
      return $this->belongsTo('App\User');
  }
}
