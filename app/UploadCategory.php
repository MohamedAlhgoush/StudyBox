<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadCategory extends Model
{
  protected $table="upload_categories";

  protected $fillable = [
          "upload_id",
          "category_id"
  ];
}
