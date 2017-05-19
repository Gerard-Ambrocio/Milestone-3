<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
     public function hiree(){
        return $this->hasMany('App\Hiree');
    }

    public function user(){
        return $this->belongsTo('App\User','hirer');
    }


     public function applicants(){
        return $this->belongsToMany('App\User','hirees','job_id','user_id');
    }

    public function create_application($id){
        return $this->applicants()->attach($id);
    }

    public function pending_applications(){
        return $this->applicants()->wherePivot('hire_status',0);
    }

    public function hired_applicants(){
        return $this->applicants()->wherePivot('hire_status',1);
    }

    public function hire_an_applicant($user_id){
        return $this->applicants()->where('user_id',$user_id)->first()->pivot->update(['hire_status'=>1]);
    }
    



}
