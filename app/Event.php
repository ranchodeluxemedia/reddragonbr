<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Event extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    public function venue()
    {
        $this->belongsTo('App\Venue');
    }
}
