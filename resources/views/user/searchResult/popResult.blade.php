@extends('user.searchResult.templateResult')
@section('containerResult')

    @foreach ($pop as $music)
    <tr>
    <td>{{ $music->title }}</td>
    <td>{{ $music->artist }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
    <td><a href="{{ route('user.nowPlaying') }}?music_id={{ $music->id }}"><i class="bi bi-play-fill text-white"></i></a></td>
    </tr>
    @endforeach
    <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->

@endsection