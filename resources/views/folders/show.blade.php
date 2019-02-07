@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">{{ $folder->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/folders">Folders</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $folder->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    @if (count($folder->folders) > 0)
    <div class="row">
        <div class="col-12">
            <h2>Subfolders</h2>
        </div>

        @foreach ($folder->folders as $sub_folder)
        <div class="col-lg-3 mb-4">
            <div class="card">
                <div class="card-header">{{ $sub_folder->name }}</div>
                <div class="card-body">{{ $sub_folder->description }}</div>
                <ul class="list-group list-group-flush">
                    @foreach ($sub_folder->folders as $subsub_folder)
                    <li class="list-group-item"><a href="/folders/{{ $subsub_folder->id }}">{{ $subsub_folder->name }}</a></li>
                    @endforeach
                </ul>
                <div class="card-footer"><small><a href="/folders/{{ $sub_folder->id }}">Open</a></small></div>
            </div>
        </div>
        @endforeach

    </div>
    @endif

    @if (count($media_items) > 0)
    <div class="row">
        <div class="col">
            <h2>Media</h2>

            <div class="row">

                @foreach ($media_items as $media_item)
                <div class="col-md-3 mb-4">

                    <div class="card">
                        <a href="{{ $media_item->getUrl('') }}">
                            <img src="{{ $media_item->getUrl('thumb') }}" class="card-img-top" alt="{{ $media_item->name }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $media_item->name }}</h5>
                            <p class="card-text">{{ $media_item->description }}</p>
                            <p class="card-text">Right-click on the links below to download and save the image.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ $media_item->getUrl() }}">Original (Full Size)</a></li>
                            <li class="list-group-item"><a href="{{ $media_item->getUrl() }}">Large</a></li>
                            <li class="list-group-item"><a href="{{ $media_item->getUrl() }}">Media</a></li>
                            <li class="list-group-item"><a href="{{ $media_item->getUrl() }}">Small</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
