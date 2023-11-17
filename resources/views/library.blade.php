@extends('layouts.main')
@section('container')
<div class="col scrollable-div p-4 " id="jumphere">
    <div class="container-fluid vh-100 d-flex flex-column">
        <div class="container-fluid flex-grow-1 p-5">

            <div class="container-fluid text-center mb-5">
                <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Your Playlists</h1>
            </div>

    
            
            <div class="container-fluid scrollable-div">
            

                    <!-- @JackGame31 @JovanAndhika edit, delete, dan play di dalam tabel pake icon   -->

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
                      <tr>
                        <th>My Playlist 1</th>
                        <th>Edit</th>
                        <th><i class="bi bi-trash-fill text-white"></i></th>
                        <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th> 
                      </tr>
                      <tr>
                        <th>My Playlist 1</th>
                        <th>Edit</th>
                        <th><i class="bi bi-trash-fill text-white"></i></th>
                        <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
                      </tr>
                      <tr>
                        <th>My Playlist 1</th>
                        <th>Edit</th>
                        <th><i class="bi bi-trash-fill text-white"></i></th>
                        <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
                      </tr>
                    </tbody>
                  </table>

                <div class="container-fluid text-center p-3">
                    <button type="button" class="btn btn-outline-light fontMonsseratSemiBold" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Playlist</button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Playlist!</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Playlist's Name</span>
                                    <input type="text" class="form-control fontMonsseratRegular" aria-describedby="basic-addon1" style="background-color: darkslategrey">
                                  </div>
                                  
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control fontMonsseratRegular"  aria-describedby="basic-addon1" style="background-color: darkslategrey">
                                    <span class="input-group-text" id="basic-addon2">Find Your Song!</span>
                                  </div>

                                  <h1 class="p-2"> Songs Added</h1>
                                  <table class="table table-striped table-hover table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>                                     
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th>My Playlist 1</th>
                                        <th><i class="bi bi-trash-fill text-white"></i></th>
                                       
                                      </tr>
                                      <tr>
                                        <th>My Playlist 1</th>
                                        <th><i class="bi bi-trash-fill text-white"></i></th>
                                      </tr>
                                      <tr>
                                        <th>My Playlist 1</th>
                                        <th><i class="bi bi-trash-fill text-white"></i></th>
                                      </tr>
                                    </tbody>
                                  </table>

                    <!-- @DanielCJ12479 @JackGame31 @JovanAndhika @royJuanAndika @terrGit perlu fitur search lagu dan lagu yg dipilih bisa di add langsung di dalam playlist -->

                            
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-outline-light">Go!</button>
                    <!-- @DanielCJ12479 @JackGame31 @JovanAndhika @royJuanAndika @terrGit perlu buat js kalau tombol go playlist kesimpen di database & tabel nambah playlist yg baru -->

                            </div>
                          </div>
                        </div>
                      </div>
    
                </div>

            </div>

           

            

        </div>



    </div>
</div>


@endsection