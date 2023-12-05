@extends('adminCRUD.layouts.admin_main')
@section('container')
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


@endsection