<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {
    protected $table = "files";
    protected $fillable = ['path', 'size', 'extension', 'name'];

    public function upload() {
        return $this->belongsToMany('App\Upload', 'upload_files');
    }
}
