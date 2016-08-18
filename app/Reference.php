<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    public function referable()
    {
        return $this->hasOne('Dubium\Referable');
    }

    public function magazinesExtraData()
    {
    	return $this->hasMany('Dubium\MagazineExtraData');
    }

    public function work()
    {
        return $this->belongsTo('Dubium\Work');
    }
}
