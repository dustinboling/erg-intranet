@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <!-- routes/breadcrumbs -->
            {{ Breadcrumbs::render('users') }}
            <h1 class="text-center mt-4">Company Directory</h1>
            {{-- <h5 class="text-center text-muted font-italic mb-4"></h5> --}}
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Last Name</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Website</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <th scope="row">{{ $user->last_name }}</th>
                        <td>{{ $user->first_name }}</td>
                        <td><a href="tel:{{ $user->phone }}">{{ $user->phone }}</a></td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                        <td><a href="{{ $user->website }}" target="_blank">{{ $user->website }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
