@extends('layouts.main')
@section('container')


<style>
    
</style>

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
                <h1 class="fontMonsseratRegular" style="font-size: 20px;">Results</h1>
            </div>

            <div class="container-fluid ">
                {{-- @JovanAndhika @JackGame31 Ini template untuk row search result nya --}}
                <ul class="list-group list-group-horizontal text-center outlined">

                    <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 60%;">Ghost<!-- @JackGame31 @JovanAndhika ini title --></li>

                    <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 30%;">Justin Bieber <!-- @JackGame31 @JovanAndhika ini artist --></li>

                    <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 10%;"><a href="nowplaying.html"><i class="bi bi-play-fill text-white"></i></a> <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. --></li>
                </ul>
            </div>

            <div class="container-fluid my-5">
                <div class="row h-100" id="mainRow">

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/jazzCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/popCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/dangdutCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/kpopCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/rockCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/classicalCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/danceCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5" style="height: 150px; '); ">
                        <img src="img/search/phonkCover.png" alt="" class="img-fluid rounded hoverable genre">
                    </div>
                    
                    
                    

                

        


                </div>
        </div> 



    </div>
        </div>

        
</div>
</section>
@endsection