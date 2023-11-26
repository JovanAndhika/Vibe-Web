@extends('layouts.user_main')
@section('container')
    <div class="col scrollable-div p-4 " id="jumphere">
        <div class="container-fluid vh-100 d-flex flex-column">
            <div class="container-fluid flex-grow-1 p-5">
                <div class="container-fluid text-center mb-5">
                    <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Your Playlists</h1>
                </div>

                {{-- flash card --}}
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="container-fluid scrollable-div">
                    <table class="table table-striped table-hover table-dark">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($playlists->isEmpty())
                                <tr>
                                    <th colspan="4" class="text-secondary">No Playlist available. Create your first
                                        playlist!</th>
                                </tr>
                            @else
                                @foreach ($playlists as $playlist)
                                    <tr>
                                        <th>{{ $playlist->name }}</th>
                                        <th><a href="#" data-bs-toggle="modal" data-bs-target="#editPlaylistModal"
                                                class="text-decoration-none text-white"
                                                onclick="loadItem({{ $playlist->id }})">Edit</a></th>
                                        <th>
                                            <a href="#" class="text-decoration-none text-white" onclick="deletePlaylist({{ $playlist->id }})" data-bs-toggle="modal"
                                                data-bs-target="#deletePlaylist">
                                                <i class="bi bi-trash-fill text-white"></i>
                                            </a>
                                        </th>
                                        <th><a href="{{ route('user.nowPlaying') . '?playlist_id=' . $playlist->id }}"><i class="bi bi-play-fill text-white"></i></a></th>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="container-fluid text-center p-3">
                        <button type="button" class="btn btn-outline-light fontMonsseratSemiBold" data-bs-toggle="modal"
                            data-bs-target="#createPlaylistModal">Add Playlist</button>
                        @include('user.partials.modalPlaylist')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
