<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Therapy extends Model
{
    protected $fillable = ['name', 'description'];

    public function User_therapies()
    {
        return $this->hasMany(User_therapy::class, 'id_therapy');
    }
    public function Users()
    {
        return $this->belongsToMany(User::class, 'user_therapies', 'id_therapy', 'id_user');
    }
}
