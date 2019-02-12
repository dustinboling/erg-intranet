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
        @foreach ($folder->folders as $subfolder)
        <div class="col-lg-3 col-md-6 mb-4">
            <a href="/folders/{{ $subfolder->id }}">
                <div class="card text-white text-center">
                    
                        <img src="http://placeimg.com/768/432/nature?v={{ rand() }}" class="card-img" alt="{{ $folder->name }}">
                    
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $subfolder->name }}</h5>
                        <p class="card-text">{{ $subfolder->description }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
    @endif
    <!-- DOCUMENTS -->
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
                        <th scope="col">File Type</th>
                        <th scope="col">View</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docs as $doc)
                    <tr>
                        <th scope="row">{{ $doc->id }}</th>
                        <td>{{ ucwords($doc->name) }}</td>
                        <td>{{ $doc->getHumanReadableSizeAttribute() }}</td>
                        <td>{{ strtoupper($doc->getExtensionAttribute()) }}</td>
                        <td><a href="{{ $doc->getUrl() }}" target="_blank">Open</a></td>
                        <td><a href="{{ $doc->getUrl() }}" download>Download</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    <!-- IMAGES -->
    @if (count($images) > 0)
    <div class="row">
        <div class="col">
            <h2>Images</h2>

            <div class="row">

                @foreach ($images as $img)
                <div class="col-md-3 mb-4">

                    <div class="card">
                        <a href="{{ $img->getUrl('') }}">
                            <img src="{{ $img->getUrl('thumb') }}" class="card-img-top" alt="{{ $img->name }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ ucwords($img->name) }}</h5>
                            <p class="card-text">{{ $img->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item">{{ $img->getHumanReadableSizeAttribute() }}</li>
                            <li class="list-group-item">{{ strtoupper($img->getExtensionAttribute()) }}</li>
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}">View Original</a></li>
                            <li class="list-group-item"><a href="{{ $img->getUrl() }}" download>Download Original</a></li>
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
