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
                            aria-label="Username" aria-describedby="addon-wrapping" id="searchInput">
                        <input type="hidden" name="submited" value="true">
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
                                    $("#search-artist").click(function() {
                                        // change search input name
                                        $("#searchInput").prop("name", "artist");

                                        // Submit the form
                                        $("#searchForm").submit();
                                    });

                                    $("#search-title").click(function() {
                                        // change search input name
                                        $("#searchInput").prop("name", "title");

                                        // Submit the form
                                        $("#searchForm").submit();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>

                {{-- pengecekan search --}}
                @if (request()->has('submited'))
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
                    @endif
                @endif

                {{-- TODO: search by category --}}
                <div class="container-fluid my-5">
                    <div class="row h-100" id="mainRow">

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/jazzCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/popCover.png') }}" alt="" class="img-fluid rounded genre"
                                style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/dangdutCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/kpopCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/rockCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/classicalCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/danceCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                            <img src="{{ asset('img/search/phonkCover.png') }}" alt=""
                                class="img-fluid rounded genre" style="object-fit: cover;">
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    </section>
@endsection
