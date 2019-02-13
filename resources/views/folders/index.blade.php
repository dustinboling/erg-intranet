@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <!-- <h1 class="text-center my-4">Folders</h1> -->
            {{ Breadcrumbs::render('folders') }}
        </div>
    </div>
    <div class="row">
        @foreach ($folders as $folder)
        <div class="col-lg-3 col-6 mb-4">
        <a href="/folders/{{ $folder->id }}">
            <div class="card text-white text-center">
                
                    <img src="http://placeimg.com/768/432/nature?v={{ rand() }}" class="card-img" alt="{{ $folder->name }}">
                
                <div class="card-img-overlay">
                    <h5 class="card-title">{{ $folder->name }}</h5>
                    <p class="card-text">{{ $folder->description }}</p>
                </div>
            </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection
