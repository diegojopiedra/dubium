<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function works()
    {
        return $this->hasMany('Dubium\Work');
    }

    public function theses()
    {
        return $this->hasMany('Dubium\Thesis');
    }
}
