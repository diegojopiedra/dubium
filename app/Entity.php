<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public function type()
    {
        return $this->belongsTo('Dubium\EntityType');
    }

    public function affiliations()
    {
        return $this->belongsToMany('Dubium\Authors', 'affiliations');
    }

    public function interships()
    {
        return $this->belongsToMany('Dubium\Authors', 'interships');
    }

    public function institution()
    {
        return $this->belongsTo('Dubium\Institution');
    }

    public function childs()
    {
    	return $this->hasMany('Dubium\Entity', 'id', 'entity_parent_id');
    }

    public function parent()
    {
    	return $this->belongsTo('Dubium\Entity', 'entity_parent_id', 'id');
    }
}
