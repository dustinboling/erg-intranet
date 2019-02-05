@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row mb-4">

        <div class="col">
            <div class="card text-white bg-primary">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">Welcome to Eugene Realty Group's Intranet!</p>
                    <p class="card-text">This is our company wide directory, file storage and Intranet. We have company logos, your business card photos, training videos, training audio files, an e-book, and checklists galore on here.</p>
                    <p class="card-text">Feel free to browse around and we hope you will find everything you need in a nice, orderly format.</p>
                    <p class="card-text">Don't see what you need? Please let Shannon, Matt or Kendra know and we can arrange to get it to you in another fashion. You'll find our contact info in the Agent Directory.</p>
                    <p class="card-text">Have Fun!!!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Agent Resources</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Agent Directory</a></li>
                    <li class="list-group-item"><a href="#">Agent Checklists</a></li>
                    <li class="list-group-item"><a href="#">Agent Web Photos</a></li>
                    <li class="list-group-item"><a href="#">Agent Print Photos</a></li>
                    <li class="list-group-item"><a href="#">Logos for Print &amp; Web</a></li>
                </ul>
                <div class="card-footer"><small><a href="/agent-resources">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Business Planning Resources</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Business Planning Guide</a></li>
                    <li class="list-group-item"><a href="#">Vendor Directory</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Scripts</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Buyer Lead Text Templates</a></li>
                    <li class="list-group-item"><a href="#">Buyer Workshop Scripts</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">Training Resources</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">2016 Audio Training</a></li>
                    <li class="list-group-item"><a href="#">Buyer Lead Workshop</a></li>
                    <li class="list-group-item"><a href="#">Cole Realty Resource Tutorials</a></li>
                    <li class="list-group-item"><a href="#">Darryl Davis Audio Training</a></li>
                    <li class="list-group-item"><a href="#">Jeff Shore - The 4:2 Formula</a></li>
                </ul>
                <div class="card-footer"><small><a href="#">Open</a></small></div>
            </div>
        </div>
    </div>
</div>
@endsection
