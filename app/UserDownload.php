<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDownload extends Model {
    protected $table = "user_downloads";
    public $timestamps = false;

    protected $fillable = [

    ];


    public function upload() {
        return $this->belongsTo('App\Upload', 'upload_id');
    }


    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
