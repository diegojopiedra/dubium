<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function publicationPlace()
    {
        return $this->belongsTo('Dubium\PublicationPlace');
    }

    public function editorial()
    {
        return $this->belongsTo('Dubium\Editorial');
    }

    public function referable()
    {
        return $this->hasOne('Dubium\Referable');
    }
}
