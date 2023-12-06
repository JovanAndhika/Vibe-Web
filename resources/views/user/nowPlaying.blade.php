@extends('user.layouts.user_main')
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
                        <img src="@if ($music->cover_path) {{ asset('storage/' . $music->cover_path) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif"
                            alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 500px; max-height: 500px;">
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
                        <audio controls>
                            <source src="{{ asset('storage/' . $music->file_path) }}" type="audio/mpeg" id="myAudio">
                        </audio>
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
                        <img src="@if ($selected->icon) {{ asset('storage/' . $selected->icon) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif"
                            alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 300px; max-height: 300px;">
                    </div>
                </div>

                {{-- title --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMonsseratSemiBold text-center" style="font-size: 30px;" id="myTitle">
                        {{ $selected->title }}</h1>
                </div>

                {{-- artist --}}
                <div class="row d-flex justify-content-center">
                    <h1 class="fontMontserratThin text-center text-white-50" style="font-size: 12px;" id="myArtist">
                        {{ $selected->artist }}
                    </h1>
                </div>

                <div class="row">
                    <div class="col d-flex justify-content-center my-3" style="font-size: 30px;">
                        {{-- TODO: rapikan/hilangkan tampilan play mp3 --}}
                        <audio controls>
                            <source src="{{ asset('storage/' . $selected->file_path) }}" type="audio/mpeg" id="myAudio">
                        </audio>
                    </div>
                </div>

                {{-- Table Playlist --}}
                <div class="container-fluid text-left mb-5" id= "2">
                    <table class="table table-striped table-hover table-dark fontMonsseratRegular">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Song</th>
                                <th scope="col">Artist</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($musics as $item)
                                <tr>
                                    <th><img src="@if ($item->cover_path) {{ asset('storage/' . $item->cover_path) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif"alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 50px; max-height: 50px;"></th>
                                    <th>{{ $item->title }}</th>
                                    <th>{{ $item->artist }}</th>
                                    <th><a href="{{ route('user.nowPlaying') . '/?playlist_id=' . request('playlist_id') . '&index=' . $loop->index }}"><i
                                                class="bi bi-play-fill text-white"></i></a></th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <script>
                    // hapus karena sistem berubah
                </script>
            @else
                {{-- jika tidak ada music --}}
                <div class="container-fluid text-center my-5">
                    <h1 class="fontMonsseratSemiBold" style="font-size: 20px;">No Music Currently Playing. Play your first music <a href="{{ route('user.index') }}" class="text-warning"> now!</a></h1>
                </div>
            @endif
        </div>
    </div>
@endsection
