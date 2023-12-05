@extends('user.layouts.user_main')
@section('container')
    <div class="col scrollable-div p-4" id="jumphere">
        <div class="container-fluid vh-100 d-flex flex-column">
            <div class="container-fluid flex-grow-1 p-5">

                <div class="container-fluid text-center mb-5">
                    <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Your History</h1>
                </div>

                <div class="container-fluid text-center justify-content-center align-content-center flex-nowrap mb-4">

                    <!-- @JovanAndhika @JackGame31 search dari user masuk ke input ini (untuk query) -->
                    <input type="text" class="form-control fontMonsseratRegular" placeholder="Time is relative..."
                        aria-label="Username" aria-describedby="addon-wrapping">

                </div>

                <div class="container-fluid d-flex justify-content-center text-center mb-5">
                    <div class="container-fluid">
                        <div class="btn-group fontMonsseratExtraBold">

                            <!-- @DanielCJ12479 @JackGame31 @JovanAndhika @royJuanAndika @terrGit ini harus buat listener js kek e. jadi kalau pencet "Search by Title", jadi ne query ne mungkin "SELECT * FROM songs WHERE title = $searched" -->

                            <button type="button" class="btn btn-outline-light ">Search by Song</button>
                            <button type="button" class="btn btn-outline-light ">Search by Date</button>
                            <button type="button" class="btn btn-outline-light ">Search by Artist</button>
                        </div>
                    </div>
                </div>



                <div class="container-fluid scrollable-div">
                    @foreach ($histories as $key => $history)
                        <div class="container-fluid text-left mb-5" id= "2">
                            <h4 class="fontMonsseratSemiBold mb-3">{{ $key }}</h4>
                            <table class="table table-striped table-hover table-dark fontMonsseratRegular">
                                <thead>
                                    <tr>
                                        <th scope="col">Song</th>
                                        <th scope="col">Artist</th>
                                        <th scope="col">Last Played</th>
                                        <th scope="col"></th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($history as $ok => $item)
                                        <tr>
                                            <th>{{ $item->music->title }}</th>
                                            <th>{{ $item->music->artist }}</th>
                                            <th>{{ $ok }}</th>

                                            <th><a href="{{ route('user.nowPlaying') }}?music_id={{ $item->music->id }}#jumphere"><i
                                                class="bi bi-play-fill text-white"></i></a></th>
                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    @endforeach


                </div>


            </div>



        </div>
    </div>
@endsection
