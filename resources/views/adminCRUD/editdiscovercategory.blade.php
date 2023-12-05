@extends('adminCRUD.layouts.admin_main')
@section('container')

<div class="container-md p-3">
        <br>
        <h1>Edit Discover</h1>
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

            <form method="post" action="{{route('admin.update_adddiscovery', ['discovery' => $discovery])}}">
                <div class="P-5">
                    @csrf
                    @method('put')
                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Category-id</label>
                        <input type="text" class="form-control form-control-md" aria-label="Default disable example" value="{{$discovery->id}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">old name category</label>
                        <input type="text" class="form-control form-control-md" name="old_disc_category" aria-label="Default disable example" value="{{$discovery->disc_category}}" placeholder="Insert new name" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Nama baru category</label>
                        <input type="text" class="form-control form-control-md" name="disc_category" aria-label="Default disable example" value="{{$discovery->disc_category}}" placeholder="Insert new name">
                    </div>

                    <div>
                        <input class="submit-addDiscover btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="Update">
                    </div>
            </form>

            <a href="{{ route('admin.adddiscovery') }}" class="btn btn-secondary btn-md mt-3">Back</a>
        </div>
    </div>

@endsection