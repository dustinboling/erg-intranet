@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center my-4">Agent Resources</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Agent Resources</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Agent Directory</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Agent Directory.pdf</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Agent Checklists</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Buyers</a></li>
                    <li class="list-group-item"><a href="#">Sellers Listings</a></li>
                    <li class="list-group-item"><a href="#">Open Houses</a></li>
                    <li class="list-group-item"><a href="#">General Forms</a></li>
                    <li class="list-group-item"><a href="#">Infographics</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Agent Photos</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Web Resolution</a></li>
                    <li class="list-group-item"><a href="#">Print Resolution</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Logos</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Web Resolution</a></li>
                    <li class="list-group-item"><a href="#">Print Resolution</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
    </div>
</div>
@endsection
