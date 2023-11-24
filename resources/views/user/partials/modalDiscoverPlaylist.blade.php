<div class="modal fade" id="#modalDiscoverOne" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex text-center justify-content-center" style="background-color: rgb(238, 181, 0)">
                <h1 class="fontMonsseratExtraBold text-center" id="exampleModalLabel" style="font-size: 35px; color: black">Playlist</h1>
            </div>
            <div class="modal-body fontMonsseratRegular bg-dark">
                <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Playlist Name</h1>
                <table class="table table-striped table-hover table-dark mb-5">
                    <thead>
                        <tr>
                            <th class="fontMonsseratSemiBold" scope="col">Song</th>
                            <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                            <th class="fontMonsseratSemiBold" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($discoversone as $music)
                        <tr>
                            <td>$music->title<!-- @JackGame31 @JovanAndhika ini title --></td>
                            <td>$music->artist <!-- @JackGame31 @JovanAndhika ini artist --></td>
                            <td><a href="{{ route('user.nowPlaying') }}?music_id={{ $music->id }}"><i class="bi bi-play-fill text-white"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer" style="background-color: rgb(238, 181, 0)">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="#modalDiscoverTwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex text-center justify-content-center" style="background-color: rgb(238, 181, 0)">
                <h1 class="fontMonsseratExtraBold text-center" id="exampleModalLabel" style="font-size: 35px; color: black">Playlist</h1>
            </div>
            <div class="modal-body fontMonsseratRegular bg-dark">
                <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Playlist Name</h1>
                <table class="table table-striped table-hover table-dark mb-5">
                    <thead>
                        <tr>
                            <th class="fontMonsseratSemiBold" scope="col">Song</th>
                            <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                            <th class="fontMonsseratSemiBold" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @if (session()->has('discoverone'))
                        @foreach ($discover as $music)
                        @endforeach
                        <tr>
                            <th>$music->title<!-- @JackGame31 @JovanAndhika ini title --></th>
                            <th>$music->artist <!-- @JackGame31 @JovanAndhika ini artist --></th>
                            <th><a href="{{ route('user.nowPlaying') }}?music_id={{ $music->id }}"><i class="bi bi-play-fill text-white"></i></a></th>
                        </tr>
                        <tr>
                            <th>Sasageyo</th>
                            <th>Hiroyuki Sawano</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>
                        </tr>
                        <tr>
                            <th>Happy Ya Ya</th>
                            <th>Guru Sekolah Minggu</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <div class="modal-footer" style="background-color: rgb(238, 181, 0)">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="#modalDiscoverThree" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex text-center justify-content-center" style="background-color: rgb(238, 181, 0)">
                <h1 class="fontMonsseratExtraBold text-center" id="exampleModalLabel" style="font-size: 35px; color: black">Playlist</h1>
            </div>
            <div class="modal-body fontMonsseratRegular bg-dark">
                <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">Playlist Name</h1>
                <table class="table table-striped table-hover table-dark mb-5">
                    <thead>
                        <tr>
                            <th class="fontMonsseratSemiBold" scope="col">Song</th>
                            <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                            <th class="fontMonsseratSemiBold" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @if (session()->has('discoverone'))
                        @foreach ($discover as $music)
                        @endforeach
                        <tr>
                            <th>$music->title<!-- @JackGame31 @JovanAndhika ini title --></th>
                            <th>$music->artist <!-- @JackGame31 @JovanAndhika ini artist --></th>
                            <th><a href="{{ route('user.nowPlaying') }}?music_id={{ $music->id }}"><i class="bi bi-play-fill text-white"></i></a></th>
                        </tr>
                        <tr>
                            <th>Sasageyo</th>
                            <th>Hiroyuki Sawano</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>
                        </tr>
                        <tr>
                            <th>Happy Ya Ya</th>
                            <th>Guru Sekolah Minggu</th>
                            <th><a href=""><i class="bi bi-plus-lg text-white"></i></a></th>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
            <div class="modal-footer" style="background-color: rgb(238, 181, 0)">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>