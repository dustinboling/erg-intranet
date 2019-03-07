@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <!-- <h1 class="text-center my-4">Folders</h1> -->
            <!-- routes/breadcrumbs -->
            {{ Breadcrumbs::render('folders') }}
        </div>
    </div>
    <div class="row">
        @each('folders.partials.cover', $folders, 'folder')
    </div>
</div>
@endsection
