{{-- This is the Calendar Cover / Button --}}
<div class="col-lg-3 col-6 mb-4">
        <a href="{{ route('calendars.show', $calendar->id) }}">
            <div class="card text-white text-center rounded shadow-sm">
                <img src="http://placeimg.com/768/576/nature?v={{ rand() }}" class="card-img rounded" alt="{{ $calendar->name }}">
                <div class="card-img-overlay d-flex align-items-center justify-content-around rounded">
                    <div>
                        <h5 class="card-title">{{ $calendar->name }}</h5>
                        <p class="card-text">{{ $calendar->description }}</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
