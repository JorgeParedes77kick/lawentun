<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'email', 'password',];

    /**
     * The attributes that should be hidden for arrays.
     */
    protected $hidden = ['password', 'remember_token',];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = ['email_verified_at' => 'datetime',];

    public function User_type()
    {
        return $this->belongsTo(User_type::class, 'id_type');
    }
    public function Schedules()
    {
        return $this->belongsToMany(Schedule::class, 'user_schedules', 'id_user','id_schedule' );
    }
    public function Therapies()
    {
        return $this->belongsToMany(Therapy::class, 'user_therapies', 'id_user','id_therapy' );
    }
    public function User_schedules()
    {
        return $this->hasMany(User_schedule::class, 'id_user');
    }
    public function User_therapies()
    {
        return $this->hasMany(User_therapy::class, 'id_user');
    }
}
