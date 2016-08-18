<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Referable extends Model
{
    public function book()
    {
        return $this->hasOne('Dubium\Book');
    }

    public function thesis()
    {
        return $this->hasOne('Dubium\Thesis');
    }

    public function reference()
    {
        return $this->belongsTo('Dubium\Reference');
    }

    public function authors()
    {
        return $this->belongsToMany('Dubium\Author', 'referable_authors');
    }
}
