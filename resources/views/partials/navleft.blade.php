<div
class="col-3 p-0 m-0 fontMonsseratExtraBold d-flex align-items-center justify-content-center resizable">
<ul class="nav flex-column text-white">
    <li class="nav-item d-inline-flex align-items-center my-3">
        <i class="bi bi-play-circle-fill text-white @if($active == 'nowPlaying') active @endif"></i>
        <a class="nav-link text-white @if($active == 'nowPlaying') active @endif" href="/nowPlaying">Now Playing</a>
    </li>

    <!-- active -->
    <li class="nav-item d-inline-flex align-items-center my-3">
        <i class="bi bi-search text-white active"></i>
        <a class="nav-link text-white active" href="/">Search</a>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <i class="bi bi-search text-white"></i>
        <a class="nav-link text-white" href="#">Discover Playlist</a>
    </li>

    <li class="nav-item d-inline-flex align-items-center my-3">
        <i class="bi bi-clock-history text-white"></i>
        <a class="nav-link text-white" href="#">History</a>
    </li>
    <li class="nav-item d-inline-flex align-items-center my-3">
        <i class="bi bi-collection-play-fill text-white"></i>
        <a class="nav-link text-white" href="#">Library</a>
    </li>

</ul>
</div>