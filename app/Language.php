<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function works()
    {
        return $this->hasMany('App\Work');
    }
}
