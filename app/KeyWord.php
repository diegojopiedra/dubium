<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class KeyWord extends Model
{
    public function works()
    {
        return $this->belongsToMany('Dubium\Work', 'work_key_words');
    }
}
