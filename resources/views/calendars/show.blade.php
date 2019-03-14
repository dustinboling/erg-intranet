@extends('layouts.app')

@push('head')
    <script src="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.js"></script>
    <link href="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler_material.css" rel="stylesheet">
@endpush

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <!-- routes/breadcrumbs -->
            {{ Breadcrumbs::render('calendar', $calendar) }}
            <h1 class="text-center mt-4">{{ $calendar->name }}</h1>
            <h5 class="text-center text-muted font-italic">{{ $calendar->description }}</h5>
        </div>
    </div>

    {{-- Calendar --}}
    <div class="row">
        <div class="col">
            <div class="bg-erg-gradient p-3 rounded shadow-sm">
                <div class="p-2 bg-white rounded" style="height:75vh">
                    <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
                        <div class="dhx_cal_navline">
                            <div class="dhx_cal_prev_button">&nbsp;</div>
                            <div class="dhx_cal_next_button">&nbsp;</div>
                            <div class="dhx_cal_today_button"></div>
                            <div class="dhx_cal_date"></div>
                            <div class="dhx_cal_tab" name="day_tab"></div>
                            <div class="dhx_cal_tab" name="week_tab"></div>
                            <div class="dhx_cal_tab" name="month_tab"></div>
                        </div>
                        <div class="dhx_cal_header"></div>
                        <div class="dhx_cal_data"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        scheduler.config.xml_date = "%Y-%m-%d %H:%i:%s";
        // MySql datetime format: YYYY-MM-DD HH:MM:SS
        // %Y-%m-%d %H:%i:%s
        scheduler.config.load_date = "%Y-%m-%d %H:%i:%s";
        scheduler.config.start_on_monday = false;
        scheduler.config.hour_date = "%g:%i %a";
        scheduler.config.first_hour = 8;
        scheduler.config.last_hour = 18;
        scheduler.config.readonly = true;
        scheduler.init("scheduler_here",null,"month");
        // must be after init and before load
        scheduler.setLoadMode("month");
        scheduler.load("/calendars/{{ $calendar->id }}/calendar-events", "json");
    </script>
@endpush
