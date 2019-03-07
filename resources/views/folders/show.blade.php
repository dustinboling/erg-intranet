@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center my-4">{{ $folder->name }}</h1>
            <!-- routes/breadcrumbs -->
            {{ Breadcrumbs::render('folder',$folder) }}
        </div>
    </div>

    @if (count($folder->folders) > 0)
    <div class="row">
        @foreach ($folder->folders as $subfolder)
        <div class="col-lg-3 col-6 mb-4">
            <a href="{{ route('folders.show', $subfolder->id) }}">
                <div class="card text-white text-center">
                    <img src="http://placeimg.com/768/432/nature?v={{ rand() }}" class="card-img rounded shadow-sm" alt="{{ $folder->name }}">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{ $subfolder->name }}</h5>
                        <p class="card-text">{{ $subfolder->description }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <hr class="mt-1 mb-4" />
    @endif

    <!-- NOTES -->
    @if (count($notes) > 0)
    <div class="row">
        @foreach ($notes as $note)
        <div class="col-md-6 mb-4">
            <div class="card" style="box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 2px;">
                <div class="card-header bg-erg-gradient text-white">{{ $note->title }}</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Warning card title</h5> -->
                    <div class="mb-3">
                        {!! $note->content !!}
                    </div>
                    {!! $note->embed_code !!}
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <hr class="mt-1 mb-4" />
    @endif

    <!-- DOCUMENTS -->
    @if (count($docs) > 0)
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
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
                        <th scope="row">{{ ucwords($doc->name) }}</th>
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
    <hr class="mb-4" />
    @endif


    <!-- IMAGES -->
    @if (count($images) > 0)
    <div class="row">
        @foreach ($images as $img)
        <div class="col-md-3 mb-4">
            <div class="card">
                <a href="{{ $img->getUrl('') }}">
                    <img src="{{ $img->getUrl('thumb') }}" class="card-img-top" alt="{{ $img->name }}">
                </a>
                <div class="card-header bg-erg-gradient text-white">{{ ucwords($img->name) }}</div>
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
    @endif

</div>
@endsection
