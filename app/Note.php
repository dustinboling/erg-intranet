<?php

namespace App;

use Laravel\Nova\Actions\Actionable;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Actionable;

    /**
     * Get the Folders associated with the Folder
     */
    public function folder()
    {
        return $this->belongsTo('App\Folder');
    }
}
