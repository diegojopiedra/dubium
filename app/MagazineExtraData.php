<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class MagazineExtraData extends Model
{
    public function reference()
    {
        return $this->belongsTo('Dubium\Reference');
    }
}
