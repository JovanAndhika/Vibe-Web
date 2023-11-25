<!-- Playlist 1 -->
@foreach ($discovers as $d)
@if ($d->id != 'none')
<div class="col-md-4 mb-4">
    <div class="card bg-warning text-dark">
        <img src="{{ asset('img/search/classicalCover.png') }}" class="card-img-top" alt="Playlist 1">
        <div class="card-body">
            <h5 class="card-title">Discover {{ $d->disc_category }}</h5>
            <div class="container-fluid text-center p-3">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-toggle="modal" data-bs-target="#modalDiscover-{{ $d->id }}" data-bs-whatever="@mdo">Play</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalDiscover-{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    @foreach ($collect_all_music[$d->id] as $music)
                        <tr>
                            <td>{{ $music['title'] }}<!-- @JackGame31 @JovanAndhika ini title --></td>
                            <td>{{ $music['artist'] }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
                            <td><a href=""><i class="bi bi-play-fill text-white"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark fontMonsseratSemiBold" data-bs-dismiss="modal">Close</button>
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