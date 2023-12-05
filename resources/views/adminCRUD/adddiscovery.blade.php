@extends('adminCRUD.layouts.admin_main')
@section('container')

    @if($errors->any())
    <div class="alert alert-danger container mt-3" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if (session()->has('successAdd'))
    <div class="container mt-3">
        <div class="alert alert-success" role="alert">
            category berhasil ditambah
        </div>
    </div>
    @elseif (session()->has('successGenre'))
    <div class="container mt-3">
        <div class="alert alert-success" role="alert">
            genre berhasil ditambah
        </div>
    </div>
    @endif


    <section class="container mt-5">
        <div class="container-fluid mb-4">
            <form method="post" action="{{ route('admin.store_adddiscovery') }}">
                @csrf
                @method('post')
                <div class="mb-3 col-lg-6">
                    <label class="form-label">Add discovery</label>
                    <input type="text" class="form-control" name="disc_category" placeholder="add new discovery">
                </div>
                <input type="submit" class="btn btn-primary" name="addDiscovery" value="Add discovery">
            </form>
        </div>


        <div class="container-fluid">
            <form method="post" action="{{ route('admin.store_newgenre') }}">
                @csrf
                @method('post')
                <div class="mb-3 col-lg-6">
                    <label class="form-label">Add genre</label>
                    <input type="text" class="form-control" name="new_genre" placeholder="add new genre">
                </div>
                <input type="submit" class="btn btn-primary" name="addGenre" value="Add genre">
            </form>
        </div>
    </section>



    <section class="mt-5 mb-5 p-5">
        <h2>Discovery</h2>
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

    <section class="mt-5 p-5">
        <h2>Newgenre</h2>
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
@endsection