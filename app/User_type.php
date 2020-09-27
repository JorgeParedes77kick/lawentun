<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class User_type extends Model
{
    protected $fillable = ['name'];

    public function Users()
    {
        return $this->hasMany(User::class, 'id_type');
    }
}
