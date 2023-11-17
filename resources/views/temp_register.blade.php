{{-- Judul --}}
<h1>Register</h1>

{{-- TODO: menggabungkan dengan front end --}}
<form method="post" action="{{ route("register.store") }}" enctype="multipart/form-data">
    @csrf
    {{-- username --}}
    <label for="username">Username</label>
    <input type="text" name="username" id="username" value="{{ old('username') }}" required>
    @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

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

    {{-- tanggal lahir --}}
    <label for="date_of_birth">Date of Birth</label>
    <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required>
    @error('date_of_birth')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    {{-- icon user --}}
    <label for="icon">Icon</label>
    <input type="file" name="icon" id="icon">
    @error('icon')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="Register">
</form>
