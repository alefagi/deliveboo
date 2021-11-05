<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function tags() 
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function orders() 
    {
        return $this->belongsToMany('App\Models\Order');
    }

    protected $fillable = ['name','description','price','cover','user_id','visible'];
}
