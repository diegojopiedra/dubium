<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public function books()
    {
        return $this->hasMany('Dubium\Book');
    }
}
