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
        return $this->hasOne('App\Folder', 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Folder', 'parent_id', 'id');
    }
}

