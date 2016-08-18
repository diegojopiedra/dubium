<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function works()
    {
    	return $this->hasMany('Dubium\Work');
    }
}
