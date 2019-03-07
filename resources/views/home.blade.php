@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- JUMBOTRON -->
            <div class="jumbotron bg-erg-gradient text-white py-4 mb-4">
                <h1 class="display-5">Hello, {{ auth()->user()->name }}!</h1>
                <p class="lead">Welcome to our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
            </div>

            <!-- ANNOUNCEMENTS -->
            <div class="row">
                <div class="col">
                    <div class="card mb-2">
                        <div class="card-header bg-erg-gradient text-white">Announcements</div>
                    </div>
                    @foreach ($announcements as $announcement)
                        <div class="card mb-2">
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
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-group mb-4">
                <li class="list-group-item list-group-item-action bg-erg-gradient text-white"><strong>Latest Resources</strong></li>

                @foreach ($folders->sortByDesc('created_at')->take(10) as $latestFolder)
                <li class="list-group-item list-group-item-action"><a href="/folders/{{ $latestFolder->id }}">{{ $latestFolder->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
