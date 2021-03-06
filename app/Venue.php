<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    protected $guarded = [];

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
