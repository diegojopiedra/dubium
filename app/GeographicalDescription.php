<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class GeographicalDescription extends Model
{
    public function woks()
    {
        return $this->belongsToMany('Dubium\Work', 'work_geographical_descriptions');
    }

    public function conuntry()
    {
        return $this->belongsTo('Dubium\Country');
    }
}
