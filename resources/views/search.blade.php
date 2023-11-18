@extends('layouts.main')
@section('container')

<div class="col scrollable-div p-4" id="jumphere">
    <div class="container-fluid d-flex flex-column">
        <div class="container-fluid flex-grow-1 p-5">

            <div class="container-fluid text-center mb-5">
                <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Search</h1>
            </div>

            <div class="container-fluid text-center justify-content-center align-content-center flex-nowrap mb-4">

                <!-- @JovanAndhika @JackGame31 search dari user masuk ke input ini (untuk query) -->
                <input type="text" class="form-control fontMonsseratRegular" placeholder="What to listen to?" aria-label="Username" aria-describedby="addon-wrapping">

            </div>

            <div class="container-fluid d-flex justify-content-center text-center mb-5">
                <div class="container-fluid">
                    <div class="btn-group fontMonsseratExtraBold">

                        <!-- @DanielCJ12479 @JackGame31 @JovanAndhika @royJuanAndika @terrGit ini harus buat listener js kek e. jadi kalau pencet "Search by Title", jadi ne query ne mungkin "SELECT * FROM songs WHERE title = $searched" -->

                        <button type="button" class="btn btn-outline-light  ">Search by Artist</button>
                        <button type="button" class="btn btn-outline-light ">Search by Title</button>
                    </div>
                </div>
            </div>

            <div class="container-fluid text-center">
                <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Results</h1>
            </div>

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
                        <tr>
                            <th>Ghost<!-- @JackGame31 @JovanAndhika ini title --></th>
                            <th>Justin Bieber <!-- @JackGame31 @JovanAndhika ini artist --></th>
                            <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th> <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->


                        </tr>
                        <tr>
                            <th>Sasageyo</th>
                            <th>Hiroyuki Sawano</th>
                            <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>


                        </tr>
                        <tr>
                            <th>Happy Ya Ya</th>
                            <th>Guru Sekolah Minggu</th>
                            <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>


                        </tr>
                    </tbody>
                </table>



            </div>

            <div class="container-fluid my-5">
                <div class="row h-100" id="mainRow">

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                    <form method="post" action="{{route('user.jazz')}}">
                        @csrf
                        @method('post')
                        <button type="submit"><img src="img/search/jazzCover.png" alt="" class="img-fluid rounded genre submit" style="object-fit: fit;"></button>
                    </form>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <a><img src="img/search/popCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;"></a>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <a><img src="img/search/dangdutCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;"></a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <img src="img/search/kpopCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <img src="img/search/rockCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <img src="img/search/classicalCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <img src="img/search/danceCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px;">
                        <img src="img/search/phonkCover.png" alt="" class="img-fluid rounded genre" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            @if (session()->has('genreJazz'))
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th class="fontMonsseratSemiBold" scope="col">Song</th>
                        <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                        <th class="fontMonsseratSemiBold" scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-left">

                    <tr>
                        <td>sss</td>
                        <td>sss <!-- @JackGame31 @JovanAndhika ini artist --></td>
                        <td><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></td> <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->
                    </tr>

                </tbody>
            </table>
            @endif
        </div>
    </div>


</div>
</section>
@endsection