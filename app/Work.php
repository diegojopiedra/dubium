<?php

namespace Dubium;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function geographical_descriptions()
    {
        return $this->belongsToMany('Dubium\GeographicalDescription', 'work_geographical_descriptions');
    }

    public function thematic_descriptions()
    {
        return $this->belongsToMany('Dubium\ThematicDescription', 'thematic_descriptions');
    }

    public function key_words()
    {
        return $this->belongsToMany('Dubium\KeyWord', 'work_key_words');
    }

    public function authors()
    {
        return $this->belongsToMany('Dubium\Author', 'work_authors');
    }

    public function type()
    {
    	return $this->belongsTo('Dubium\Type');
    }

    public function degree()
    {
        return $this->belongsTo('Dubium\Degree');
    }

    public function language()
    {
        return $this->belongsTo('Dubium\Language');
    }

    public function references()
    {
    	return $this->hasMany('Dubium\Reference');
    }
}
