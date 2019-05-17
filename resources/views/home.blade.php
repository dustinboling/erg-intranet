@php
function friendlyGreeting($name)
{
    // Set to Pacific Time
    date_default_timezone_set('America/Los_Angeles');

    // 24-hour format of an hour without leading zeros (0 through 23)
    $hour = date('G');

    if ( $hour >= 5 && $hour <= 11 ) {
        return "Good Morning, {$name}!";
    } else if ( $hour >= 12 && $hour <= 18 ) {
        return "Good Afternoon, {$name}!";
    } else if ( $hour >= 19 || $hour <= 4 ) {
        return "Good Evening, {$name}!";
    }
}
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col">


            {{-- <div class="jumbotron bg-erg-gradient text-white py-4 mb-4 shadow-sm">
                <h1 class="display-5">{{ friendlyGreeting(auth()->user()->name) }}</h1>
                <p class="lead">Welcome to our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
            </div> --}}

            {{-- Google Search --}}
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-erg-gradient text-white p-2 rounded shadow-sm">
                        <form action="https://www.google.com/search" id="f" method="get" target="_blank">
                            <div class="input-group">
                                <input name="q" type="text" class="form-control rounded-pill" placeholder="Google Search" aria-label="Google Search" aria-describedby="button-gsearch">
                                <div class="input-group-append">
                                    <button class="btn text-white rounded-pill" type="submit" id="button-gsearch">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

{{-- Welcome Greeting --}}
<div class="row mb-4">
        <div class="col-12">
            <h1 class="">{{ friendlyGreeting(auth()->user()->name) }}</h1>
            <p class="lead">Welcome to our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
        </div>
    </div>



            {{-- Resources --}}
            @if ( $topLevelFolders->isNotEmpty() )
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="bg-erg-gradient text-white py-3 px-4 mb-3 rounded shadow">
                            <h4 class="my-0 text-center">Resources</h4>
                        </div>
                    </div>
                    @each('folders.partials.cover', $topLevelFolders, 'folder')
                </div>
            @endif

            {{-- Calendars --}}
            @if ( $calendars->isNotEmpty() )
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="bg-erg-gradient text-white py-3 px-4 mb-3 rounded shadow">
                            <h4 class="my-0 text-center">Calendars</h4>
                        </div>
                    </div>
                    @each('calendars.partials.cover', $calendars, 'calendar')
                </div>
            @endif

            {{-- Announcements --}}
            @if ( $announcements->isNotEmpty() )
                <div class="row mb-4">
                    <div class="col-12 mb-2">
                        <div class="bg-erg-gradient text-white py-3 px-4 rounded shadow">
                            <h4 class="my-0 text-center">Announcements</h4>
                        </div>
                    </div>

                    @foreach ($announcements as $announcement)
                    <div class="col-12 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $announcement->title }}</h5>
                                {!! $announcement->content !!}
                            </div>
                            <div class="card-footer bg-light text-right" style="border-top:none;">
                                <small class="text-muted">
                                    posted <time datetime="{{ $announcement->created_at }}">
                                        {{ date_format(date_create($announcement->created_at), "l, F jS, Y" ) }}
                                    </time>
                                </small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
        {{-- Sidebar --}}
        <div class="col-md-3">
            {{-- Links --}}
            <ul class="list-group mb-4 shadow-sm">
                    <li class="list-group-item list-group-item-action bg-erg-gradient text-white"><strong>External Links</strong></li>
                    <li class="list-group-item list-group-item-action">
                        <a href="http://www.rmlsweb.com/" target="_blank">RMLS</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="https://www.rlid.org/" target="_blank">Regional Land Information Database</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="https://app.paperlesspipeline.com/accounts/login/" target="_blank">Paperless Pipeline</a>
                    </li>
                    <li class="list-group-item list-group-item-action">
                        <a href="https://new.zipformplus.com/default.aspx#" target="_blank">zipForm Plus</a>
                    </li>
                </ul>
            {{-- Latest Resources --}}
            <ul class="list-group mb-4 shadow-sm">
                <li class="list-group-item list-group-item-action bg-erg-gradient text-white"><strong>Latest Resources</strong></li>
                @foreach ($latestFolders as $latestFolder)
                    <li class="list-group-item list-group-item-action">
                        <a href="{{ route('folders.show', $latestFolder->id) }}">{{ $latestFolder->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
