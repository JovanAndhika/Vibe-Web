<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>


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
                        <a class="nav-link active" href="/admin/viewadmin">View Admin</a>
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

    <br>

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



    <section class="my-4">
        <div class="px-5 container-fluid table-responsive-md">
            <table id="user_list" class="table table-striped dataTable no-footer" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date of birth</th>
                        <th>Activation</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td></td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->date_of_birth}}</td>
                        <td>{{$user->activation}}</td>
                        <td>
                            <div class="mt-1 d-grid gap-2 d-md-flex justify-content-md-start">
                                <form action="{{route('admin.reactivateadmin', ['user' => $user->id])}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button class="confirm-reactivate btn btn-primary btn-sm" name="reactivate_data" id="reactivate_data">Reactivate</button>
                                </form>
                                <form action="{{route('admin.deactivateadmin', ['user' => $user->id])}}" method="post">
                                    @method('post')
                                    @csrf
                                    <button class="confirm-deactivate btn btn-danger btn-sm" name="deactivate_data" id="deactivate_data">Deactivate</button>
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
            $('.confirm-deactivate').click(function(event) {
                let form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will deactivate user!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, deactivate!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Deactivated!',
                            'admin is inactive.',
                            'success'
                        )
                    }
                })
            })

            $('.confirm-reactivate').click(function(event) {
                let form = $(this).closest("form");
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will deactivate user!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, reactivate!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire(
                            'Reactivated!',
                            'admin is active.',
                            'success'
                        )
                    }
                })
            })

            $('#user_list').DataTable();
        });

        $('#user_list').dataTable({
            "ordering": true
        });
    </script>

</body>

</html>