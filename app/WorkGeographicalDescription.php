<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class WorkGeographicalDescription extends Model
{
    public function geographicalDescription()
    {
        return $this->belongsTo('Dubium\GeographicalDescription');
    }

    public function work()
    {
        return $this->belongsTo('Dubium\Work');
    }
}
