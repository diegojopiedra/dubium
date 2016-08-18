<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class WorkAuthor extends Model
{
    public function Author()
    {
        return $this->belongsTo('Dubium\Author');
    }

    public function work()
    {
        return $this->belongsTo('Dubium\Work');
    }
}
