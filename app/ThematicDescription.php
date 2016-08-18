<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class ThematicDescription extends Model
{
    public function works()
    {
    	return $this->belongsToMany('Dubium\Work', 'work_thematic_descriptions');
    }
}
