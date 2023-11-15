<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Song </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Add Song</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">View User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">View Admin</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <style>
        .bg-body-primary {
            background-color: blue;
            overflow: scroll;
        }

        .navbar a.active {
            color: yellow !important;
        }

        .navbar a {
            color: #fff;
        }
    </style>


    <div class="container-md p-3">
        <br>
        <h1>Add Song</h1>



        <div class="mt-4 mb-3">

            <form mwthod="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="col-lg-7">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" autofocus="true" name="title" id="title" placeholder="Insert title">
                    </br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Artist</label>
                    <input class="form-control" type="text" name="artist" id="artist" placeholder="Insert singer">
                    </br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Genre</label>
                    <input class="form-control" type="text" name="genre" id="genre" placeholder="Insert genre">
                    </br>
                </div>

                <div class="col-lg-7">
                    <label for="choose" class="form-label">Insert song file .mp3</label>
                    <input class="form-control" type="file" id="choose" name="choose">
                    </br>
                </div>


                <div class="col-lg-7">
                    <label class="form-label">Release date</label>
                    <input class="form-control" type="date" name="release_date" id="release_date" placeholder="Insert genre">
                    </br>
                </div>

                <div>
                    <input class="btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="add"></input>
                </div>
                
            </form>

        </div>
    </div>


</body>

</html>