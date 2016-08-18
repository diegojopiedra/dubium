<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    public function degree()
    {
    	return $this->belongsTo('Dubium\Degree');
    }

    public function institution()
    {
    	return $this->belongsTo('Dubium\Institution');
    }

    public function referable()
    {
    	return $this->belongsTo('Dubium\Referable');
    }
}
