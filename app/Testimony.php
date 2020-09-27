<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Testimony extends Model
{
    protected $fillable = ['description', 'stars', 'author'];

}
