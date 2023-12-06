<!-- Playlist 1 -->
@foreach ($discovers as $d)
    @if ($d->id != 1)
     

    <div class="col-lg-3 col-md-4 col-sm-6 my-3" style="height: 150px;">
        <div class="card text-dark text-center genre" data-bs-toggle="modal" data-bs-target="#modalDiscover-{{ $d->id }}" data-bs-whatever="@mdo">
            <div class="card-body text-center align-items-center justify-content-center" style="height: 150px;">
                <p class="mt-3 mb-1 uppercase" style="margin-bottom: 0;">Discover:</p>
                <h3 class="uppercase fontMonsseratExtraBold" style="margin-top: 0;">{{ $d->disc_category }}</h3>
            </div>
        </div>
    </div>
    


        <div class="modal fade" id="modalDiscover-{{ $d->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-flex text-center justify-content-center"
                        style="background-color: rgb(238, 181, 0)">
                        <h1 class="fontMonsseratExtraBold text-center" id="exampleModalLabel"
                            style="font-size: 35px; color: black">Playlist</h1>
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
                                @foreach ($collect_all_music[$d->id] as $music)
                                    <tr>
                                        <td>{{ $music['title'] }}<!-- @JackGame31 @JovanAndhika ini title --></td>
                                        <td>{{ $music['artist'] }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
                                        <td><a href="{{ route('user.nowPlaying') }}?music_id={{ $music['id'] }}"><i
                                                    class="bi bi-play-fill text-white"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            var exampleModal = document.getElementById('modalDiscover-{{ $d->id }}')
            exampleModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
            })
        </script>
    @endif
@endforeach
