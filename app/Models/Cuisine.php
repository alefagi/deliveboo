<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    public function users() 
    {
        return $this->belongsToMany('App\User');
    }
}
