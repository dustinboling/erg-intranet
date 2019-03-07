{{-- This is the Folder Cover / Button --}}
<div class="col-lg-3 col-6 mb-4">
    <a href="{{ route('folders.show', $folder->id) }}">
        <div class="card text-white text-center">
            <img src="http://placeimg.com/768/576/nature?v={{ rand() }}" class="card-img" alt="{{ $folder->name }}">
            <div class="card-img-overlay d-flex align-items-center justify-content-around">
                <div>
                    <h5 class="card-title">{{ $folder->name }}</h5>
                    <p class="card-text">{{ $folder->description }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
