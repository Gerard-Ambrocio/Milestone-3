<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function jobs(){
        return $this->hasMany('App\Job','hirer','user_id');
    }
}
