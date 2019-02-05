<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [];

    /**
     * Get the Folder parent associated with the Folder
     */
    public function parent()
    {
        return $this->belongsTo('App\Folder')->where('parent_id',0);
    }

    public function children()
    {
        return $this->hasMany('App\Folder','parent_id');
    }
}

