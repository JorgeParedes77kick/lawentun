<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class User_therapy extends Model
{
    protected $fillable = ['id_user', 'id_therapy'];

    public function User(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function Therapy(){
        return $this->belongsTo(Therapy::class,'id_therapy');
    }
}
