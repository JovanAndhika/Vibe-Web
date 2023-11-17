@extends('layouts.main')
@section('container')

<div class="col scrollable-div p-4" id="jumphere">
    <div class="container-fluid vh-100 d-flex flex-column">

        
        <div class="row flex-grow-1">
            <div class="col d-flex align-items-center justify-content-center m-3">

                <!-- @JovanAndhika @JackGame31 masukkin image song nya disini-->
                <img src="https://i.scdn.co/image/ab67616d0000b2733d98a0ae7c78a3a9babaf8af"
                    alt="Artist Photo" class="img-fluid rounded-3" style="max-width: 300px; max-height: 300px;">
            
            </div>
        </div>

        <!-- song title -->
        <div class="row d-flex justify-content-center">

            <!-- @JovanAndhika @JackGame31 masukkin title song nya disini-->
            <h1 class="fontMonsseratSemiBold text-center" style="font-size: 30px;">Super Shy</h1>
        </div>

        <div class="row d-flex justify-content-center">
            <!-- @JovanAndhika @JackGame31 masukkin artist song nya disini-->
            <h1 class="fontMontserratThin text-center text-white-50" style="font-size: 12px;">New Jeans</h1>
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center my-3" style="font-size: 30px;">
                <i class="bi bi-play-fill mx-3"></i>
                <i class="bi bi-pause-fill mx-3"></i>
                <i class="bi bi-bookmark-fill mx-3"></i>
                <i class="bi bi-heart-fill mx-3"></i>
            </div>
        </div>

    </div>
</div>
</div>
</section>
@endsection