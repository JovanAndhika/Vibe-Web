@extends('layouts.main')
@section('container')
<div class="col-9">
    <div class="container mt-4">
        <h2 class="text-white">Discover Playlists</h2>
        <div class="row">
            <!-- Playlist 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="playlist1.jpg" class="card-img-top" alt="Playlist 1">
                    <div class="card-body">
                        <h5 class="card-title">Playlist 1</h5>
                        <p class="card-text">Description of Playlist 1.</p>
                        <a href="#" class="btn btn-primary">Listen</a>
                    </div>
                </div>
            </div>

            <!-- Playlist 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="playlist2.jpg" class="card-img-top" alt="Playlist 2">
                    <div class="card-body">
                        <h5 class="card-title">Playlist 2</h5>
                        <p class="card-text">Description of Playlist 2.</p>
                        <a href="#" class="btn btn-primary">Listen</a>
                    </div>
                </div>
            </div>

            <!-- Playlist 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="playlist3.jpg" class="card-img-top" alt="Playlist 3">
                    <div class="card-body">
                        <h5 class="card-title">Playlist 3</h5>
                        <p class="card-text">Description of Playlist 3.</p>
                        <a href="#" class="btn btn-primary">Listen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="col scrollable-div p-4" id="jumphere">
    </div>
@endsection