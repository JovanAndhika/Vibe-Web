@extends('user.searchResult.templateResult')
@section('containerResult')

    @foreach ($musics_raw as $music => $m)
    <tr>
        <td>{{ $m['title'] }}</td>
        <td>{{ $m['artist'] }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
        <td><a href="{{ route('user.nowPlaying') }}?music_id={{ $m['id_music'] }}"><i class="bi bi-play-fill text-white"></i></a></td>
    </tr>
    @endforeach
    <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->

@endsection