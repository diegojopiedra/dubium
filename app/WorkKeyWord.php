<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class WorkKeyWord extends Model
{
    public function keyWord()
    {
        return $this->belongsTo('Dubium\KeyWord');
    }

    public function work()
    {
        return $this->belongsTo('Dubium\Work');
    }
}
