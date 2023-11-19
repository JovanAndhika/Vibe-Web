@extends('layouts.user_main')
@section('container')
    <div class="col-9">
        <div class="container mt-4">
            <h2 class="text-white">Discover Playlists</h2>
            <div class="row">
                <!-- Playlist 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning text-dark">
                        <img src="{{ asset('img/search/classicalCover.png') }}" class="card-img-top" alt="Playlist 1">
                        <div class="card-body">
                            <h5 class="card-title">Playlist 1</h5>
                            <p class="card-text">Description of Playlist 1.</p>
                            <div class="container-fluid text-center p-3">
                                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@mdo">Play</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Playlist 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning text-dark">
                        <img src="{{ asset('img/search/jazzCover.png') }}" class="card-img-top" alt="Playlist 2">
                        <div class="card-body">
                            <h5 class="card-title">Playlist 2</h5>
                            <p class="card-text">Description of Playlist 2.</p>
                            <div class="container-fluid text-center p-3">
                                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@mdo">Play</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Playlist 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-warning text-dark">
                        <img src="{{ asset('img/search/popCover.png') }}" class="card-img-top" alt="Playlist 3">
                        <div class="card-body">
                            <h5 class="card-title">Playlist 3</h5>
                            <p class="card-text">Description of Playlist 3.</p>
                            <div class="container-fluid text-center p-3">
                                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    data-bs-whatever="@mdo">Play</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col scrollable-div p-4" id="jumphere">
    </div>

    @include('user.partials.modalDiscoverPlaylist')
@endsection
