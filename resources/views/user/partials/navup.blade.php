    <nav class="navbar w-100" style="background-color: rgb(238, 181, 0); width: 100%;">
        <div class="container-fluid d-flex justify-content-between px-5">
            <a class="navbar-brand fontMonsseratExtraBold" style="font-size: 50px; color: rgb(0,0,0);"
                href="#mainSection">Vibe</a>
            <form method="post" action="{{ route('logout') }}" id="logout-form">
                @csrf
                <a type="submit" class="nav-item fontMonsseratRegular"
                    style="font-size: 20px; text-decoration: none ; color: rgb(0,0,0);" onclick="logout()">Log Out</a>
                <script>
                    function logout() {
                        document.getElementById('logout-form').submit();
                    }
                </script>
            </form>
        </div>
    </nav>
    <section id="mainSection">
        <div class="row">
