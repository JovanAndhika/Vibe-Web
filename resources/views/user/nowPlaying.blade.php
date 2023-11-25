@extends('layouts.user_main')
@section('container')
    {{-- untuk ajax --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- main --}}
    <div class="col scrollable-div p-4" id="jumphere">
        <div class="container-fluid vh-100 d-flex flex-column">
            @if (isset($music))
                {{-- jika ada --}}
                <div class="row flex-grow-1">
                    <div class="col d-flex align-items-center justify-content-center m-3">
                        {{-- TODO: tambahkan icon di database music --}}
                        <img src="@if ($music->icon) {{ asset('storage/' . $music->icon) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif"
                            alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 300px; max-height: 300px;">
                    </div>
                </div>

                {{-- title --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMonsseratSemiBold text-center" style="font-size: 30px;">{{ $music->title }}</h1>
                </div>

                {{-- artist --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMontserratThin text-center text-white-50" style="font-size: 12px;">{{ $music->artist }}
                    </h1>
                </div>

                <div class="row">
                    <div class="col d-flex justify-content-center my-3" style="font-size: 30px;">
                        {{-- TODO: rapikan/hilangkan tampilan play mp3 --}}
                        <i class="bi bi-bookmark-fill mx-3"></i>
                        <audio controls>
                            <source src="{{ asset('storage/' . $music->file_path) }}" type="audio/mpeg" id="myAudio">
                        </audio>
                        <i class="bi bi-heart-fill mx-3"></i>
                    </div>
                </div>
            @elseif(isset($playlist->musics))
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMonsseratSemiBold text-center text-warning" style="font-size: 30px;">Playlist : <span
                            class="text-white">{{ $playlist->name }}</span></h1>
                </div>
                {{-- jika ada playlist --}}
                {{-- jika ada --}}
                <div class="row flex-grow-1">
                    <div class="col d-flex align-items-center justify-content-center m-3">
                        {{-- TODO: tambahkan icon di database music --}}
                        <img src="@if ($musics[0]->icon) {{ asset('storage/' . $musics[0]->icon) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif"
                            alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 300px; max-height: 300px;">
                    </div>
                </div>

                {{-- title --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMonsseratSemiBold text-center" style="font-size: 30px;" id="myTitle">
                        {{ $musics[0]->title }}</h1>
                </div>

                {{-- artist --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMontserratThin text-center text-white-50" style="font-size: 12px;" id="myArtist">
                        {{ $musics[0]->artist }}
                    </h1>
                </div>

                <div class="row">
                    <div class="col d-flex justify-content-center my-3" style="font-size: 30px;">
                        {{-- TODO: rapikan/hilangkan tampilan play mp3 --}}
                        <i class="bi bi-bookmark-fill mx-3"></i>
                        <audio controls>
                            <source src="{{ asset('storage/' . $musics[0]->file_path) }}" type="audio/mpeg" id="myAudio">
                        </audio>
                        <i class="bi bi-heart-fill mx-3"></i>
                    </div>
                </div>

                {{-- Table Playlist --}}
                <div class="container-fluid text-left mb-5" id= "2">
                    <table class="table table-striped table-hover table-dark fontMonsseratRegular">
                        <thead>
                            <tr>
                                <th scope="col">Song</th>
                                <th scope="col">Artist</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($musics as $item)
                                <tr>
                                    <th>{{ $item->title }}</th>
                                    <th>{{ $item->artist }}</th>
                                    <th><a onclick="changes({{ $item->id }})"><i
                                                class="bi bi-play-fill text-white"></i></a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <script>
                    var musics = {!! json_encode($musics) !!};
                    var currentID = 0;

                    function changes(id) {
                        // simpan history ke ajax
                        $.ajax({
                            type: "POST",
                            url: "{{ url('user/history') }}/" + id,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            // jika gagal
                            error: function(data) {
                                console.log(data);
                            }
                        });

                        // Dapatkan data untuk id tertentu dari variabel musics
                        var selectedMusic = musics.find(function(music) {
                            return music.id === id;
                        });

                        var selectedMP3 = selectedMusic.file_path;
                        var selectedTitle = selectedMusic.title;
                        var selectedArtist = selectedMusic.artist;
                        $('#myAudio').attr('src', '{{ asset('storage') }}/' + selectedMP3);
                        $('#myTitle').text(selectedTitle);
                        $('#myArtist').text(selectedArtist);

                        currentID = musics.findIndex(function(music) {
                            return music.id === id;
                        });

                        $('#myAudio').on('ended', function() {
                            // Pemutaran lagu selesai, lanjutkan ke lagu selanjutnya
                            playNextSong();
                        });

                        function playNextSong() {
                            // Cek apakah masih ada lagu selanjutnya
                            if (currentID < musics.length - 1) {
                                currentID++;
                                var nextMusic = musics[currentID];

                                // Putar lagu selanjutnya
                                changes(nextMusic.id);
                                $('#myAudio')[0].play();
                            } else {
                                // Jika tidak ada lagu selanjutnya, kembali ke lagu pertama
                                currentID = 0;
                            }

                            changes(musics[currentID].id);
                            $('#myAudio')[0].play();
                        }

                    }
                </script>
            @else
                {{-- TODO: rapikan tampilan --}}
                {{-- jika tidak ada music --}}
                <div class="container-fluid text-center">
                    <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">No Music Currently Playing</h1>
                </div>
            @endif
        </div>
    </div>
    </div>
    </section>
@endsection
