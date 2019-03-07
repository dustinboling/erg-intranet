{{-- This is the Folder Cover / Button --}}
<div class="col-lg-3 col-6 mb-4">
    <a href="{{ route('folders.show', $folder->id) }}">
        <div class="card text-white text-center">
            <img src="http://placeimg.com/768/432/nature?v={{ rand() }}" class="card-img" alt="{{ $folder->name }}">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $folder->name }}</h5>
                <p class="card-text">{{ $folder->description }}</p>
            </div>
        </div>
    </a>
</div>
