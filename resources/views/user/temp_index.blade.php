<h1>Wellcome</h1>
<form method="post" action="{{ route('logout') }}">
    @csrf
    <input type="submit" value="logout">
</form>