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
            <div class="jumbotron bg-white">
                <h1 class="display-4">Welcome to Our Intranet!</h1>
                <p class="lead">This is our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
                <hr class="my-4">
                <p>Feel free to browse around and we hope you will find everything you need in a nice, orderly format.</p>
                <a class="btn btn-primary btn-lg" href="/folders" role="button">Get started!</a>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-group mb-4">
                <li class="list-group-item list-group-item-action"><strong>Quick Links</strong></li>
                @foreach ($folders as $folder)
                <li class="list-group-item list-group-item-action"><a href="/folders/{{ $folder->id }}">{{ $folder->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="alert alert-info">Don't see what you need?<br/>Please let Shannon, Matt or Kendra know and we can arrange to get it to you in another fashion. You'll find our contact info in the Agent Directory. Have Fun!!!</div>
        </div>
    </div>
</div>
@endsection
