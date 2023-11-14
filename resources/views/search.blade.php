@extends('layouts.main')
@section('container')
<div class="col scrollable-div p-4">
  <div class="container-fluid vh-100 d-flex flex-column">
      <div class="container-fluid flex-grow-1 p-5">

          <div class="container-fluid text-center mb-5">
              <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Search</h1>
          </div>

          <div class="container-fluid text-center justify-content-center align-content-center flex-nowrap mb-4">
              <input type="text" class="form-control fontMonsseratRegular" placeholder="What to listen to?" aria-label="Username"
                  aria-describedby="addon-wrapping">
          </div>

          <div class="container-fluid d-flex justify-content-center text-center mb-5">
              <div class="container-fluid">
                  <div class="btn-group fontMonsseratExtraBold">
                      <button type="button" class="btn btn-outline-primary ">Search by Artist</button>
                      <button type="button" class="btn btn-outline-primary ">Search by Title</button>
                  </div>
              </div>
          </div>

          <div class="container-fluid text-center">
              <h1 class="fontMonsseratRegular" style="font-size: 20px;">Results</h1>
          </div>

          <div class="container-fluid scrollable-div">
              <ul class="list-group list-group-horizontal text-center outlined">
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 60%;">Ghost</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 30%;">Justin Bieber</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 10%;"><a href="nowplaying.html"><i class="bi bi-play-fill text-white"></i></a></li>
              </ul>
              <ul class="list-group list-group-horizontal text-center outlined">
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 60%;">As it Was</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 30%;">Harry Styles</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 10%;"><a href="nowplaying.html"><i
                              class="bi bi-play-fill text-white"></i></a></li>
              </ul>
              <ul class="list-group list-group-horizontal text-center outlined">
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 60%;">Oceans & Engines</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 30%;">NIKI</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 10%;"><a href="nowplaying.html"><i
                              class="bi bi-play-fill text-white"></i></a></li>
              </ul>
              <ul class="list-group list-group-horizontal text-center outlined">
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 60%;">C.H.R.I.S.Y.E</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 30%;">Diskoria</li>
                  <li class="list-group-item h-100 bg-dark text-white outlined" style="width: 10%;"><a href="nowplaying.html"><i
                              class="bi bi-play-fill text-white"></i></a></li>
              </ul>
              

              


          </div>
          

      </div>
<!-- 
      <div class="container-fluid">
          <div class="row" id="mainRow">

              <div class="col-lg-2 col-md-3 col-sm-6 cardCol">
                  <div class="card text-dark mb-3 border-1 border-dark" style="background-color: rgb(231, 203, 203);">
                      <div class="card-header border-1 border-dark d-flex justify-content-between align-items-center">
                          <h3>Title</h3>
                          <button type="button" class="btn-close cardCloseButton" aria-label="Close"
                              data-dismiss="this"></button>
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
      </div> -->


  </div>
</div>
</div>
</section>
@endsection