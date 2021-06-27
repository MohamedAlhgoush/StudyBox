<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstructorVotes extends Model
{
  protected $table = "user_votes_instructor";
  protected $fillable = [
      "instructor_id",
      "user_id",
    ];
}
