@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">Folders</h1>
            {{ Breadcrumbs::render('folders') }}
        </div>
    </div>
    <div class="row">

        @foreach ($folders as $folder)
        <div class="col-lg-3 mb-4">
            <div class="card">
                <div class="card-header">{{ $folder->name }}</div>
                <div class="card-body">{{ $folder->description }}</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">// TODO</a></li>
                </ul>
                <div class="card-footer"><small><a href="/folders/{{ $folder->id }}">Open</a></small></div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
