<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVote extends Model
{
    protected $table = "user_votes";
    protected $fillable = [
        "upload_id",
        "user_id",
      ];
}
