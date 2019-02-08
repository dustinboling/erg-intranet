@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">{{ $folder->name }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/folders">Top Folder</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $folder->name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    @if (count($folder->folders) > 0)
    <div class="row">

        @foreach ($folder->folders as $sub_folder)
        <div class="col-lg-3 mb-4">
            <div class="card text-center">
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

    @if (count($docs) > 0)
    <div class="row">
        <div class="col">
            <h2>Documents</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docs as $doc)
                    <tr>
                        <th scope="row">{{ $doc->id }}</th>
                        <td>{{ $doc->name }}</td>
                        <td>21kb</td>
                        <td><a href="#" class="">Open</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    @if (count($images) > 0)
    <div class="row">
        <div class="col">
            <h2>Photos</h2>

            <div class="row">

                @foreach ($images as $img)
                <div class="col-md-3 mb-4">

                    <div class="card">
                        <a href="{{ $img->getUrl('') }}">
                            <img src="{{ $img->getUrl('thumb') }}" class="card-img-top" alt="{{ $img->name }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $img->name }}</h5>
                            <p class="card-text">{{ $img->description }}</p>
                            <p class="card-text">Right-click on the links below to download and save the image.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}">Original (Full Size)</a></li>
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}">Large</a></li>
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}">Media</a></li>
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}">Small</a></li>
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
