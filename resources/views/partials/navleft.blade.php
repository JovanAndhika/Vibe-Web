<div
class="col-3 p-0 m-0 fontMonsseratExtraBold d-flex align-items-center justify-content-center resizable">
<ul class="nav flex-column text-white hoverable">
    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'nowPlaying') active @endif" href="/nowPlaying#jumphere"><i class="bi bi-play-circle text-white @if($active == 'nowPlaying') active @endif"></i></a>        
        <span>
            <a class="nav-link text-white @if($active == 'nowPlaying') active @endif" href="/nowPlaying#jumphere">Now Playing</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'home') active @endif" href="/home#jumphere"><i class="bi bi bi-house text-white @if($active == 'home') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'home') active @endif" href="/home#jumphere">Home</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'search') active @endif" href="/#jumphere"><i class="bi bi-search text-white @if($active == 'search') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'search') active @endif" href="/#jumphere">Search</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'discoverPlaylist') active @endif" href="/discoverPlaylist#jumphere"> <i class="bi bi-compass text-white @if($active == 'discoverPlaylist') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'discoverPlaylist') active @endif" href="/discoverPlaylist#jumphere">Discover Playlist</a>
        </span>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'history') active @endif" href="/history#jumphere"><i class="bi bi-clock-history text-white @if($active == 'history') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'history') active @endif" href="/history#jumphere">History</a>
        </span>
    </li>
    <li class="nav-item d-inline-flex align-items-center my-3">
        <a class="nav-link text-white @if($active == 'library') active @endif" href="/library#jumphere"><i class="bi bi-collection-play text-white @if($active == 'library') active @endif"></i></a>
        <span>
            <a class="nav-link text-white @if($active == 'library') active @endif" href="/library#jumphere">Library</a>
        </span>
        
    </li>

</ul>
</div>