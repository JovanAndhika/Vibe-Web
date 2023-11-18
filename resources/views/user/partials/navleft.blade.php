<div
class="col-3 p-0 m-0 fontMonsseratExtraBold d-flex align-items-center justify-content-center resizable">
<ul class="nav flex-column text-white hoverable">
    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'nowPlaying') active @endif" href="{{ route('user.nowPlaying') }}"><i class="bi bi-play-circle text-white @if($active == 'nowPlaying') active @endif"></i></a>        
        <span>
            <a class="nav-link text-white @if($active == 'nowPlaying') active @endif" href="{{ route('user.nowPlaying') }}">Now Playing</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'home') active @endif" href="{{ route('user.nowPlaying') }}"><i class="bi bi bi-house text-white @if($active == 'home') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'home') active @endif" href="{{ route('user.nowPlaying') }}">Home</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'search') active @endif" href="{{ route('user.search') }}"><i class="bi bi-search text-white @if($active == 'search') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'search') active @endif" href="{{ route('user.search') }}">Search</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'discoverPlaylist') active @endif" href="{{ route('user.discoverPlaylist') }}"> <i class="bi bi-compass text-white @if($active == 'discoverPlaylist') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'discoverPlaylist') active @endif" href="{{ route('user.discoverPlaylist') }}">Discover Playlist</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'history') active @endif" href="{{ route('user.history') }}"><i class="bi bi-clock-history text-white @if($active == 'history') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'history') active @endif" href="{{ route('user.history') }}">History</a>
        </span>
    </li>
    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'library') active @endif" href="{{ route('user.library') }}"><i class="bi bi-collection-play text-white @if($active == 'library') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'library') active @endif" href="{{ route('user.library') }}">Library</a>
        </span>
    </li>
</ul>
</div>