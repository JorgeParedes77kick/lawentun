<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['hour'];

    public function User_schedules()
    {
        return $this->hasMany(User_schedule::class, 'id_shedule');
    }
    public function Users()
    {
        return $this->belongsToMany(User::class, 'user_therapy', 'id_therapy', 'id_user');
    }
}
