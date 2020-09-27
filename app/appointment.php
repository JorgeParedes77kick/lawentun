<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['patient', 'email_patient', 'id_user_therapy', 'id_user_schedules', 'date'];

    public function User_therapy()
    {
        return $this->belongsTo(User_therapy::class, 'id_user_therapy');
    }
    public function User_schedule()
    {
        return $this->belongsTo(User_schedule::class, 'id_user_shedule');
    }
    public function User()
    {
        return $this->hasOneThrough(User::class, User_therapy::class, 'id_therapy', 'id_user', 'id', 'id');
    }
}
