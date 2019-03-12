<?php

namespace App;

use Spatie\MediaLibrary\File;
use Laravel\Nova\Actions\Actionable;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MeidaLibrary\HasMedia\Manipulations;

class Folder extends Model implements HasMedia
{
    use HasMediaTrait, Actionable;
    protected $guarded = [];

    /**
     * Get the Parent Folder associated with the Folder
     */
    public function folder()
    {
        return $this->belongsTo('App\Folder');
    }
    // public function parent()
    // {
    //     return $this->belongsTo('App\Folder');
    // }

    /**
     * Get the Folders associated with the Folder
     */
    public function folders()
    {
        return $this->hasMany('App\Folder');
    }
    // public function children()
    // {
    //     return $this->hasMany('App\Folder');
    // }

    /**
     * Get the Notes associated with the Folder
     */
    public function notes()
    {
        return $this->hasMany('App\Note');
    }

    /**
     * Register Media Conversions
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
              ->crop('crop-top', 253, 253)
              ->sharpen(5);
    }
}

