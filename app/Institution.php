<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function conuntry()
    {
        return $this->belongsTo('Dubium\Country');
    }

    public function theses()
    {
        return $this->hasMany('Dubium\Thesis');
    }

    public function entities()
    {
        return $this->hasMany('Dubium\Entity');
    }
}
