<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class ReferenceAuthor extends Model
{
    public function Author()
    {
        return $this->belongsTo('Dubium\Author');
    }

    public function reference()
    {
        return $this->belongsTo('Dubium\Reference');
    }
}
