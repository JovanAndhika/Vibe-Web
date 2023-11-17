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
                        <th><a href="/"><i class="bi bi-play-fill text-white"></i></a></th> 
                      </tr>
                      <tr>
                        <th>My Playlist 1</th>
                        <th>Edit</th>
                        <th><i class="bi bi-trash-fill text-white"></i></th>
                        <th><a href="/"><i class="bi bi-play-fill text-white"></i></a></th>
                      </tr>
                      <tr>
                        <th>My Playlist 1</th>
                        <th>Edit</th>
                        <th><i class="bi bi-trash-fill text-white"></i></th>
                        <th><a href="/"><i class="bi bi-play-fill text-white"></i></a></th>
                      </tr>
                    </tbody>
                  </table>

                <div class="container-fluid text-center p-3">
                    <button type="button" class="btn btn-outline-light fontMonsseratSemiBold" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Playlist</button>

                    @include('partials.modalAddPlaylist')
  

                </div>

            </div>

           

            

        </div>



    </div>
</div>


@endsection