@extends('layouts.user_main')
@section('container')
    <div class="col scrollable-div p-4" id="jumphere">
        <div class="container-fluid vh-100 d-flex flex-column">

            @if ($music)
                {{-- jika ada --}}
                <div class="row flex-grow-1">
                    <div class="col d-flex align-items-center justify-content-center m-3">
                        {{-- TODO: tambahkan icon di database music --}}
                        <img src="@if($music->icon) {{ asset('storage/' . $music->icon) }} @else {{ asset('img/now_playing/empty_icon.jpeg') }} @endif" alt="Artist Photo"
                            class="img-fluid rounded-3" style="max-width: 300px; max-height: 300px;">
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
                        {{-- TODO: rapikan tampilan play mp3 --}}
                        <audio controls><source src="{{ asset('storage/' . $music->file_path) }}" type="audio/mpeg"></audio>
                        <i class="bi bi-play-fill mx-3"></i>
                        <i class="bi bi-pause-fill mx-3"></i>
                        <i class="bi bi-bookmark-fill mx-3"></i>
                        <i class="bi bi-heart-fill mx-3"></i>
                    </div>
                </div>
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
