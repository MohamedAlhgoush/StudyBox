<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model {
    protected $table = "universities";

    protected $fillable = ['name', 'descritption', 'short_name'];


    /**
     * Get the users for the univercity.
     */
     public function users()
     {
         return $this->belongsToMany('App\User','user_universities', 'user_id');
     }


    /**
     * Get the faculties for the univercity.
     */
    public function faculties() {
        return $this->hasMany('App\Faculty', 'uni_id');
    }
}
