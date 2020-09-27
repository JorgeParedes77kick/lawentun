<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class User_schedule extends Model
{
    protected $fillable = ['id_user', 'id_schedule'];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function Schedule(){
        return $this->belongsTo(Schedule::class,'id_schedule');
    }
}
