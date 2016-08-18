<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class EntityType extends Model
{
    public function entitties()
    {
    	return $this->hasMany('App\Entity');
    }
}
