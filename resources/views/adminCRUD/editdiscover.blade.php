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

            <form method="post" action="{{route('admin.updatediscover', ['music' => $music])}}">
                <div class="P-5">
                    @csrf
                    @method('put')
                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Category-id</label>
                        <input type="text" class="form-control form-control-md" aria-label="Default disable example" value="{{$music->category_id}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Old_category</label>
                        <input type="text" class="form-control form-control-md" aria-label="Default disable example" value="{{$old_category}}" disabled>
                    </div>

                    <div class="col-md-3 mt-3 mb-3">
                        <label class="form-label">Ganti category</label>
                        <select class="form-select form-select-md" name="disc_category" aria-label=".form-select-md example">
                            @foreach ($discoveries as $d)
                            <option value="{{ $d->disc_category }}">{{ $d->disc_category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <input class="submit-discover btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="Update">
                    </div>
            </form>
        </div>
    </div>

@endsection