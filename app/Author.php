<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function affiliations()
    {
        return $this->belongsToMany('Dubium\Entity', 'affiliations');
    }

    public function interships()
    {
        return $this->belongsToMany('Dubium\Entity', 'interships');
    }

    public function works()
    {
        return $this->belongsToMany('Dubium\Work', 'work_authors');
    }

    public function referables()
    {
        return $this->belongsToMany('Dubium\Referable', 'referable_authors');
    }

    public function emails()
    {
        return $this->hasMany('Dubium\Email');
    }

    public function country()
    {
        return $this->belongsTo('Dubium\Country');
    }
}
