<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function calendar_events()
    {
        return $this->hasMany('App\CalendarEvent');
    }
}
