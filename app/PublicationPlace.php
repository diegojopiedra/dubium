<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class PublicationPlace extends Model
{
    public function books()
    {
        return $this->hasMany('Dubium\Book');
    }

    public function conuntry()
    {
        return $this->belongsTo('Dubium\Country');
    }
}
