<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function applications(){
        return $this->belongsToMany('App\Job','hirees','user_id','job_id');
    }

    public function create_application($id){
        return $this->applications()->attach([$id => ['hire_status'=>0]]);
    }

    public function hired(){
        return $this->applications()->wherePivot('hire_status',1);
    }

    // public function hire_applicant(){
    //     return $this->
    // }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
