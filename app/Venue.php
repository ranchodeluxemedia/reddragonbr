<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{

    protected $guarded = [];

    public function events()
    {
        $this->hasMany('App\Event');
    }
}
