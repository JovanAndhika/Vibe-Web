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
        <div class="logo"> <h1 class="navbar-brand fontMonsseratExtraBold" style="font-size: 30px; color: rgb(77, 205, 205);" href="#mainSection">Vibeeeeeee.</h1></div>
        <h2 class= "p-3"; style="font-size: 40px;">Your Music Is waiting For You!</h2>
        <form action="/submit-account-details" method="post">
           
            <div class="input-group mb-3">
                <button class="btn btn-outline-info change" type="button" id="button-addon1">Username</button>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-outline-info change" type="button" id="button-addon1">Password</button>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
           
            {{-- tombol buat LOG IN @GAISSS --}}

            <button class=" btn btn-outline-info fontMonsseratSemiBold mb-3"; type="submit">Log In</button>
            <a href="/opening" class="btn btn-outline-info font-weight-semibold mb-3">Back</a>
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