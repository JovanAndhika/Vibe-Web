@extends('layouts.user_main')
@section('container')
    <div class="col scrollable-div p-4" id="jumphere">
        <div class="container-fluid d-flex flex-column">
            <div class="container-fluid flex-grow-1 p-5">

                <div class="container-fluid text-center mb-5">
                    <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Search</h1>
                </div>

                <div class="container-fluid text-center justify-content-center align-content-center flex-nowrap mb-4">
                    {{-- Search --}}
                    <form method="get" action="{{ route('user.search') }}" id="searchForm">
                        <input type="text" class="form-control fontMonsseratRegular" placeholder="What to listen to?"
                            aria-label="Username" aria-describedby="addon-wrapping" id="searchKeyword" name="keyword"
                            value="{{ request('keyword') }}">
                    </form>

                </div>

                {{-- button search --}}
                <div class="container-fluid d-flex justify-content-center text-center mb-5">
                    <div class="container-fluid">
                        <div class="btn-group fontMonsseratExtraBold">
                            <button type="button" class="btn btn-outline-light" id="search-artist">Search by
                                Artist</button>
                            <button type="button" class="btn btn-outline-light" id="search-title">Search by Title</button>

                            {{-- script untuk set value input hidden searchBy dan submit --}}
                            <script>
                                $(document).ready(function() {
                                    form = $("#searchForm");
                                    $("#search-artist").click(function() {
                                        // create new hidden input
                                        var input = $("<input>")
                                            .attr("type", "hidden")
                                            .attr("name", "searchBy").val("artist");

                                        // Submit the form
                                        form.append(input).submit();
                                    });

                                    $("#search-title").click(function() {
                                        // create new hidden input
                                        var input = $("<input>")
                                            .attr("type", "hidden")
                                            .attr("name", "searchBy").val("title");

                                        // Submit the form
                                        form.append(input).submit();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>

                {{-- pengecekan search --}}
                @if (request()->has('keyword'))
                    @if ($musics->isEmpty())
                        {{-- jika hasil search music belum ada --}}
                        <div class="container-fluid text-center">
                            <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">No results found</h1>
                        </div>
                    @else
                        {{-- jika hasil search music ada --}}
                        {{-- judul --}}
                        <div class="container-fluid text-center">
                            <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Results</h1>
                        </div>

                        {{-- TODO: ubah menjadi cards, bukan table --}}
                        {{-- tabel --}}
                        <div class="container-fluid ">
                            <table class="table table-striped table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th class="fontMonsseratSemiBold" scope="col">Song</th>
                                        <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                                        <th class="fontMonsseratSemiBold" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    @foreach ($musics as $music)
                                        <tr>
                                            <th>{{ $music->title }}</th>
                                            <th>{{ $music->artist }}</th>
                                            <th><a href="{{ route('user.nowPlaying') }}?music_id={{ $music->id }}"><i
                                                        class="bi bi-play-fill text-white"></i></a></th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- pagination --}}
                        {{-- TODO: rapikan pagination --}}
                        <div class="d-flex justify-content-center">
                            {{ $musics->links() }}
                        </div>
                    @endif
                @endif

                {{-- genre --}}
                <div class="container-fluid my-5">
                    <div class="row h-100" id="mainRow">
                        <style>
                            .btn-genre {
                                background: none;
                                color: inherit;
                                border: none;
                                padding: 0;
                            }
                        </style>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.jazz') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img src="{{ asset('img/search/jazzCover.png') }}"
                                        alt="" class="img-fluid rounded genre submit"
                                        style="object-fit: fit;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.pop') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img src="{{ asset('img/search/popCover.png') }}"
                                        alt="" class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.dangdut') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img
                                        src="{{ asset('img/search/dangdutCover.png') }}" alt=""
                                        class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.kpop') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img src="{{ asset('img/search/kpopCover.png') }}"
                                        alt="" class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.rock') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img src="{{ asset('img/search/rockCover.png') }}"
                                        alt="" class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.classical') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img
                                        src="{{ asset('img/search/classicalCover.png') }}" alt=""
                                        class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.dance') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img
                                        src="{{ asset('img/search/danceCover.png') }}" alt=""
                                        class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <form method="post" action="{{ route('user.ponk') }}">
                                @csrf
                                @method('post')
                                <button class="btn-genre" type="submit"><img
                                        src="{{ asset('img/search/phonkCover.png') }}" alt=""
                                        class="img-fluid rounded genre" style="object-fit: cover;"></button>
                            </form>
                        </div>

                        {{-- additional genre from admin --}}
                        @foreach ($newgenres as $newgenre)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                                <form method="post" action="{{ route('user.newgenre', ['newgenre' => $newgenre]) }}">
                                    @csrf
                                    @method('post')
                                    <button type="submit">
                                        <p class="img-fluid rounded genre" style="object-fit: cover;">
                                            {{ $newgenre->new_genre }}</p>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- discover playlist from admin --}}
                <div class="col-9">
                    <div class="container-fluid mt-4">
                        <h2 class="text-white">Discover Playlists</h2>
                        <div class="row d-inline-block">
                            @include('user.partials.modalDiscoverPlaylist')
                        </div>
                    </div>
                </div>
            @endsection
