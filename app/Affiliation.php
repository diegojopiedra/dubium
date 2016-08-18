<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    public function author()
    {
        return $this->belongsTo('Dubium\Author');
    }

    public function entity()
    {
        return $this->belongsTo('Dubium\Entity');
    }
}
