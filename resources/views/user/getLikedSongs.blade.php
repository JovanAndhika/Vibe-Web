@extends('user.searchResult.templateResult')
@section('containerResult')

@foreach ($musics_raw as $music => $m)
<tr>
    <td>{{ $m['title'] }}</td>
    <td>{{ $m['artist'] }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
    <td>
        <div class="d-flex flex-row">
            <a href="{{ route('user.nowPlaying') }}?music_id={{ $m['id_music'] }}"><i class="bi bi-play-fill text-white"></i></a>
            <form action="{{ route( 'user.deletelike', ['music_playlist' => $music] ) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-sm btn-dark" name="addlike" id="addlike"><i class="bi bi-trash-fill text-white"></i></button>
            </form>
        </div>
    </td>
</tr>
@endforeach
<!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->

@endsection