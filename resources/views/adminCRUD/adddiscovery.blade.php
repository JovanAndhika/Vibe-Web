<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Discovery </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                        <a class="nav-link" href="/admin/addsong">Add Song</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/viewuser">View User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/viewadmin">View Admin</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/discover">Discover</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/adddiscovery">Add Discover</a>
                    </li>

                    {{-- TODO: Jovan sempurnakan tampilannya --}}
                    <li class="nav-item">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <style>
        .bg-body-primary {
            background-color: blue;
        }

        .navbar a.active {
            color: yellow !important;
        }

        .navbar a {
            color: #fff;
        }
    </style>

    @if (session()->has('successAdd'))
    <div class="alert alert-success" role="alert">
        category berhasil ditambah
    </div>
    @elseif (session()->has('successGenre'))
    <div class="alert alert-success" role="alert">
        genre berhasil ditambah
    </div>
    @endif

    <section class="p-5">
        <div class="px-5 container-fluid mb-4">
            <form method="post" action="{{ route('admin.store_adddiscovery') }}">
                @csrf
                @method('post')
                <div class="mb-3 col-lg-6">
                    <label class="form-label">Add discovery</label>
                    <input type="text" class="form-control" name="disc_category" placeholder="add new discovery">
                </div>
                <input type="submit" class="btn btn-primary" value="Add">
            </form>
        </div>

        <div class="px-5 container-fluid">
            <form method="post" action="{{ route('admin.store_newgenre') }}">
                @csrf
                @method('post')
                <div class="mb-3 col-lg-6">
                    <label class="form-label">Add genre</label>
                    <input type="text" class="form-control" name="disc_category" placeholder="add new genre">
                </div>
                <input type="submit" class="btn btn-primary" value="Add">
            </form>
        </div>
    </section>



    <section class="mt-5">
        <div class="px-5 container-fluid table-responsive-md">
            <table id="category_list" class="table table-striped dataTable no-footer" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>disc_category</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($discoveries as $discovery)
                    <tr>
                        <td></td>
                        <td>{{$discovery->id}}</td>
                        <td>{{$discovery->disc_category}}</td>
                        <td>
                            <div class="mt-1 d-grid gap-2 d-md-flex justify-content-md-start">
                                <a href="{{ route('admin.edit_adddiscovery', ['discovery' => $discovery]) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form method="post" action="{{ route('admin.destroy_adddiscovery', ['discovery' => $discovery]) }}">
                                    @method('delete')
                                    @csrf
                                    <button class="confirm-delete-discovery btn btn-danger btn-sm" name="delete_category" id="delete_category">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>

    <section class="mt-5">
        <div class="px-5 container-fluid table-responsive-md">
            <table id="newgenre_list" class="table table-striped dataTable no-footer" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>new_genre</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($newgenres as $genre)
                    <tr>
                        <td></td>
                        <td>{{$genre->id}}</td>
                        <td>{{$genre->new_genre}}</td>
                        <td>
                            <div class="mt-1 d-grid gap-2 d-md-flex justify-content-md-start">
                                <a href="{{ route('admin.edit_newgenre', ['newgenre' => $genre]) }}" class="btn btn-secondary btn-sm">Edit</a>
                                <form method="post" action="{{ route('admin.destroy_newgenre', ['newgenre' => $genre]) }}">
                                    @method('delete')
                                    @csrf
                                    <button class="confirm-delete-discovery btn btn-danger btn-sm" name="delete_category" id="delete_category">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>


    <script>
        $(document).ready(function() {
            $('.confirm-delete-discovery').click(function(event) {
                let form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will delete data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deleted!',
                            'data is deleted.',
                            'success'
                        )
                    }
                })
            })

            $('#newgenre_list').DataTable();
            $('#category_list').DataTable();
        });

        $('#category_list').dataTable({
            "ordering": true
        });
    </script>
    </section>

</body>