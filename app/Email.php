<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function author()
    {
        return $this->belongsTo('Dubium\Author');
    }
}
