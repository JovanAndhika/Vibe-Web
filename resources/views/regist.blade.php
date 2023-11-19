<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="fonts.css">
    <link rel="stylesheet" type="text/css" href="opening.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            transition: background-color 2s ease;
        }

        .black-background {
            background-color: black;
        }

        h2 {
            color: black;
            transition: color 2s ease;
        }

        .white-text {
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="logo">
            <a class="navbar-brand fontMonsseratExtraBold" style="font-size: 50px; color: rgb(238, 181, 0);"
            href="#mainSection">Vibe</a>  
        </div>
        <h2 style="font-size: 40px;">Create Your Account!</h2>
        <form action="{{ route('register.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- email --}}
            <div class="mb-3">
                <div class="input-group">
                    <button class="btn btn-outline-warning change" type="button" id="button-addon1">Email</button>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        name="email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <div class="invalid-feedback d-block text-start">{{ $message }}</div>
                @enderror
            </div>

            {{-- username --}}
            <div class="mb-3">
                <div class="input-group">
                    <button class="btn btn-outline-warning change" type="button" id="button-addon1">Username</button>
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username" name="username" value="{{ old('username') }}" required>
                </div>
                @error('username')
                    <div class="invalid-feedback d-block text-start">{{ $message }}</div>
                @enderror
            </div>

            {{-- password --}}
            <div class="mb-3">
                <div class="input-group">
                    <button class="btn btn-outline-warning change" type="button" id="button-addon1">Password</button>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" required>
                </div>
                @error('password')
                    <div class="invalid-feedback d-block text-start">{{ $message }}</div>
                @enderror
            </div>

            {{-- tanggal lahir --}}
            <div class="mb-3">
                <div class="input-group">
                    <button class="btn btn-outline-warning change" type="button" id="button-addon1">Birthday</button>
                    <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                        name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                </div>
                @error('date_of_birth')
                    <div class="invalid-feedback d-block text-start">{{ $message }}</div>
                @enderror
            </div>

            {{-- icon --}}
            <div class="mb-3">
                <div class="input-group">
                    <button class="btn btn-outline-warning change" type="button" id="button-addon1">Avatar</button>
                    <input type="file" class="form-control @error('icon') is-invalid @enderror" name="icon"
                        accept="image/*">
                </div>
                @error('icon')
                    <div class="invalid-feedback d-block text-start">{{ $message }}</div>
                @enderror
            </div>

            {{-- submit button --}}
            <button class=" btn btn-outline-warning fontMonsseratSemiBold mb-3"; type="submit">Create Account</button>
            <a href="{{ route('home') }}" class="btn btn-outline-warning font-weight-semibold mb-3">Back</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Tambahkan kelas black-background setelah beberapa waktu
            setTimeout(function() {
                document.body.classList.add("black-background");
                document.querySelector("h2").classList.add("white-text");
            }, 5000); // Mengatur waktu penundaan sebelum perubahan warna terjadi (dalam milidetik)

            // Tambahkan event listener pada tombol "change"
            var changeButtons = document.querySelectorAll(".change");
            changeButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    // Toggle kelas black-background pada body
                    document.body.classList.toggle("black-background");

                    // Toggle kelas white-text pada h2
                    document.querySelector("h2").classList.toggle("white-text");
                });
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
