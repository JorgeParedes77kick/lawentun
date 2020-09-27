<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['fecha', 'tags', 'text', 'author'];

}
