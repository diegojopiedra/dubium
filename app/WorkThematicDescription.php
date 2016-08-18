<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class WorkThematicDescription extends Model
{
    public function thematicDescription()
    {
        return $this->belongsTo('Dubium\ThematicDescription');
    }

    public function work()
    {
        return $this->belongsTo('Dubium\Work');
    }
}
