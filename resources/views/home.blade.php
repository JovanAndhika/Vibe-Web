@extends('layouts.main')
@section('container')

    <div class="col scrollable-div p-4" id="jumphere">
        <div class="container-fluid d-flex flex-column">
            <div class="container-fluid flex-grow-1 p-5">

                <div class="container-fluid text-center mb-2">
                    <h1 class="fontMonsseratExtraBold" style="font-size: 50px;">Home</h1>
                </div>

                <div class="container-fluid text-center mb-5">
                    <h1 class="fontMonsseratRegular" style="font-size: 25px;">Greetings, Roy <!--@JovanAndhika @JackGame31 masukkin nama user--> ! </h1>
                </div>

                <div class="container-fluid text-center mb-5">
                    <h1 class="fontMonsseratRegular" style="font-size: 20px;">Not sure what to listen yet? Here's list of our songs.</h1>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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
                            <tr>
                                <th>Happy Ya Ya</th>
                                <th>Guru Sekolah Minggu</th>
                                <th><a href="/nowPlaying"><i class="bi bi-play-fill text-white"></i></a></th>
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


                



            </div>
        </div>
    </div>
@endsection