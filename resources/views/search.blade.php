@extends('layouts.main')
@section('container')


<div class="col scrollable-div p-4">
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

                        <button type="button" class="btn btn-outline-primary ">Search by Artist</button>
                        <button type="button" class="btn btn-outline-primary ">Search by Title</button>
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
                <div class="row" id="mainRow">

                    <div class="col-lg-2 col-md-3 col-sm-6 cardCol">
                        <div class="card text-dark mb-3 border-1 border-dark" style="background-color: rgb(231, 203, 203);">
                            <div class="card-header border-1 border-dark d-flex justify-content-between align-items-center">
                                <h3>Title</h3>
                                <button type="button" class="btn-close cardCloseButton" aria-label="Close"
                                data-dismiss="this">
                                </button>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Note here</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 cardCol">
                        <div class="card text-dark mb-3 border-1 border-dark" style="background-color: rgb(231, 203, 203);">
                            <div class="card-header border-1 border-dark d-flex justify-content-between align-items-center">
                                <h3>Title</h3>
                                <button type="button" class="btn-close cardCloseButton" aria-label="Close" data-dismiss="this"></button>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Note here</p>
                            </div>
                        </div>
                    </div>


                </div>
        </div> 

    </div>
        </div>

        
</div>
</section>
@endsection