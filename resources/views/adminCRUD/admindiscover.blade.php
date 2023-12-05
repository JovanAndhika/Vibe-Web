@extends('adminCRUD.layouts.admin_main')
@section('container')
    <section class="p-5">
            <div class="px-5 container-fluid table-responsive-md">
                <table id="song_list" class="table table-striped dataTable no-footer" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>discovery_category</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($musics as $music)
                        <tr>
                            <td></td>
                            <td>{{$music->title}}</td>
                            <td>{{$music->artist}}</td>
                            <td>{{$music->disc_category}}</td>
                            <td>
                                <a href="{{route('admin.editdiscover', ['music' => $music->id])}}" class="btn btn-secondary btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>


    <script>
        $(document).ready(function() {
            $('#song_list').DataTable();
        });

        $('#song_list').dataTable({
            "ordering": true
        });
    </script>
@endsection