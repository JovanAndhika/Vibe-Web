@extends('searchResult.templateResult')
@section('containerResult')
<tr>
    @foreach ($ponk as $music)
    <td>{{ $music->title }}</td>
    <td>{{ $music->artist }}<!-- @JackGame31 @JovanAndhika ini artist --></td>
    <td><a href="#"><i class="bi bi-play-fill text-white"></i></a></td>
    @endforeach
    <!-- @JackGame31 @JovanAndhika ini button play nya, nanti redirect ke nowplaying.html, dengan lagu yang dipilih itu. -->
</tr>
@endsection