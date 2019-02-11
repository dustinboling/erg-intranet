<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Get the Folders associated with the Folder
     */
    public function folder()
    {
        return $this->belongsTo('App\Folder');
    }
}
