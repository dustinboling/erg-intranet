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
            <div class="jumbotron bg-erg-gradient text-white py-4">
                <h1 class="display-5">Hello, {{ auth()->user()->name }}!</h1>
                <p class="lead">Welcome to our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-group mb-4">
                <li class="list-group-item list-group-item-action bg-erg-gradient text-white"><strong>Quick Links</strong></li>
                @foreach ($folders as $folder)
                <li class="list-group-item list-group-item-action"><a href="/folders/{{ $folder->id }}">{{ $folder->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
