<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function authors()
    {
        return $this->hasMany('Dubium\Author');
    }

    public function geographical_descriptions()
    {
        return $this->hasMany('Dubium\GeographicalDescription');
    }

    public function institutions()
    {
        return $this->belongsTo('Dubium\Institution');
    }

    public function publication_places()
    {
        return $this->hasMany('Dubium\PublicationPlace');
    }
}
