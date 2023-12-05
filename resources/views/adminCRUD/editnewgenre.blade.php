@extends('adminCRUD.layouts.admin_main')
@section('container')

<div class="container-md p-3">
        <br>
        <h1>Edit Genre</h1>
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
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

        <div class="mt-4 mb-3">

            <form method="post" action="{{route('admin.update_newgenre', ['newgenre' => $newgenre])}}">
                <div class="P-5">
                    @csrf
                    @method('put')
                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">new_genre id</label>
                        <input type="text" class="form-control form-control-md" aria-label="Default disable example" value="{{$newgenre->id}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Old genre name</label>
                        <input type="text" class="form-control form-control-md" name="old_newgenre" aria-label="Default disable example" value="{{$newgenre->new_genre}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Nama baru genre</label>
                        <input type="text" class="form-control form-control-md" name="new_genre" aria-label="Default disable example" value="{{$newgenre->new_genre}}" placeholder="Insert new name">
                    </div>

                    <div>
                        <input class="submit-addDiscover btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="Update">
                    </div>
            </form>

            <a href="{{ route('admin.adddiscovery') }}" class="btn btn-secondary btn-md mt-3">Back</a>
        </div>
    </div>

@endsection