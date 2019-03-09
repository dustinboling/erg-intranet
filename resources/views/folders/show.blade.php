@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <!-- routes/breadcrumbs -->
            {{ Breadcrumbs::render('folder', $folder) }}
            <h1 class="text-center mt-4">{{ $folder->name }}</h1>
            <h5 class="text-center text-muted font-italic mb-4">{{ $folder->description }}</h5>
        </div>
    </div>

    @if (count($folder->folders) > 0)
    <div class="row">
        @each('folders.partials.cover', $folder->folders, 'folder')
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
                    {{-- Text content of the Note --}}
                    <div class="card-text mb-3">
                        {!! $note->content !!}
                    </div>
                    {{-- Embed the YouTube Video if one exists --}}
                    @includeWhen($note->youtube_video, 'notes.partials.youtube', ['youtubeUrl' => $note->youtube_video])
                    {{-- Output any additional embed codes --}}
                    {!! $note->embed_code !!}
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
                        <th scope="row">{{ ucwords(strtolower(str_replace(['-','_'], ' ', $doc->name))) }}</th>
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

    <!-- AUDIO -->
    @if (count($audio) > 0)
    <div class="row">
        @foreach ($audio as $aud)
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header bg-erg-gradient text-white">{{ ucwords(strtolower(str_replace(['-','_'], ' ', $aud->name))) }}</div>
                <div class="card-body text-center">
                    <audio class="w-100 mb-3" controls>
                        <source src="{{ $aud->getUrl() }}" type="audio/mp3">
                        <p>Your browser doesn't support HTML5 audio. Here is a <a href="{{ $aud->getUrl() }}">link to the audio</a> instead.</p>
                    </audio>
                    <p class="card-text text-muted">
                        <a href="{{ $aud->getUrl() }}" download>Download</a> <small>({{ $aud->getHumanReadableSizeAttribute() }})</small>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
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
                    <img src="{{ $img->getUrl('thumb') }}" class="card-img-top" alt="{{ ucwords(strtolower(str_replace(['-','_'], ' ', $img->name))) }}">
                </a>
                <div class="card-header bg-erg-gradient text-white">{{ ucwords(strtolower(str_replace(['-','_'], ' ', $img->name))) }}</div>
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
