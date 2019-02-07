<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MeidaLibrary\HasMedia\Manipulations;

class Folder extends Model implements HasMedia
{
    use HasMediaTrait;
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

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->crop('crop-top', 253, 253)
              ->sharpen(5);
    }
}

