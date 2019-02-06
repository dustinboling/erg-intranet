<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $guarded = [];

    /**
     * Get the Parent Folder associated with the Folder
     */
    public function folder()
    {
        return $this->belongsTo('App\Folder');
    }

    /**
     * Get the Folders associated with the Folder
     */
    public function folders()
    {
        return $this->hasMany('App\Folder');
    }
}

