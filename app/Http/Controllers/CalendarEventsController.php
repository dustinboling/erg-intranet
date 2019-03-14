<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Calendar;
use Illuminate\Http\Request;

class CalendarEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Calendar $calendar)
    {
        // /calendars/2/calendar-events
        $from = $request->from;
        $to = $request->to;

        return response()->json([
            "data" => $calendar->calendar_events
                ->where('start_date', '<', $to)
                ->where('end_date', '>=', $from)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Calendar $calendar)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @param  \App\CalendarEvent  $calendarEvent
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar, CalendarEvent $calendarEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @param  \App\CalendarEvent  $calendarEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar, CalendarEvent $calendarEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendar  $calendar
     * @param  \App\CalendarEvent  $calendarEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar, CalendarEvent $calendarEvent)
    {
        //
    }
}
