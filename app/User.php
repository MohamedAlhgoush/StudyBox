<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status', 'uni_id' ,'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the university that owns the user.
     */
    public function university()
    {
        return $this->belongsTo('App\University');
    }

    public function faculties()
    {
        return $this->belongsToMany('App\Faculty', 'faculty_user', 'user_id');
    }
    public function uploads()
    {
        return $this->hasMany('App\Upload','student_id');
    }

    public function downloads()
    {
        return $this->belongsToMany('App\Upload','user_downloads','user_id');
    }

    public function universities()
    {
        return $this->belongsToMany('App\University','user_universities', 'uni_id');

    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }


}
