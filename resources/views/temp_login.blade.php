{{-- Judul --}}
<h1>Login</h1>

{{-- flash card --}}
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

{{-- TODO: menggabungkan dengan front end --}}
<form method="post" action="{{ route('login.store') }}">
    @csrf
    {{-- email --}}
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ old('email') }}" required>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- password --}}
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Login">
</form>
