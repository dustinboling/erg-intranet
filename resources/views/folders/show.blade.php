@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">{{ $folder->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/folders">Resources</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $folder->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">

        @foreach ($folder->folders as $sub_folder)
        <div class="col-lg-3 mb-4">
            <div class="card">
                <div class="card-header">{{ $sub_folder->name }}</div>
                <div class="card-body">{{ $sub_folder->description }}</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">// TODO</a></li>
                </ul>
                <div class="card-footer"><small><a href="/folders/{{ $sub_folder->id }}">Open</a></small></div>
            </div>
        </div>
        @endforeach
        

    </div>
</div>
@endsection
