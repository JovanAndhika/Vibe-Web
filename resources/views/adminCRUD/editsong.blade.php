@extends('adminCRUD.layouts.admin_main')
@section('container')

<div class="container-md p-3">
        <br>
        <h1>Edit Song</h1>
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

            <form method="post" action="{{route('admin.update', ['music' => $music])}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-lg-7">
                    <label class="form-label">Title</label>
                    <input class="form-control" type="text" autofocus="true" name="title" id="title" placeholder="Insert title" value="{{$music->title}}">
                    <br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Artist</label>
                    <input class="form-control" type="text" name="artist" id="artist" placeholder="Insert artist" value="{{$music->artist}}">
                    <br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Genre</label>
                    <select class="form-select" aria-label="Default select example" name="genre" id="genre" placeholder="Choose genre">
                        <option selected value="{{$music->genre}}">{{$music->genre}}</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Pop">Pop</option>
                        <option value="Dangdut">Dangdut</option>
                        <option value="Kpop">Kpop</option>
                        <option value="Rock">Rock</option>
                        <option value="Classical">Classical</option>
                        <option value="Dance">Dance</option>
                        <option value="Phonk">Phonk</option>
                        @foreach ($newgenres as $newgenre)
                            <option value="{{ $newgenre->new_genre }}">{{ $newgenre->new_genre }}</option>
                        @endforeach
                    </select>
                    <br>
                </div>

                <div class="col-lg-7">
                    <label for="choose" class="form-label">Insert song file .mp3</label>
                    <input type="hidden" name="oldsong" value="{{$music->file_path}}">
                    @if ($music->file_path)
                    <p class="mb-3 col-lg-7"><?= $music->title . " - " . $music->artist . " - " . $music->file_path ?></p>
                    @else
                    <p class="mb-3 col-lg-7">No music</p>
                    @endif
                    <input class="form-control" type="file" id="chfile" name="chfile">
                    <br>
                </div>

                <div class="col-lg-7">
                    <label class="form-label">Release date</label>
                    <input class="form-control" type="date" name="release_date" id="release_date" placeholder="Insert genre" value="{{$music->release_date}}">
                    <br>
                </div>

                <div>
                    <input class="btn btn-primary btn-md col-lg-1 mt-3" type="submit" name="submit" id="submit" value="update">
                </div>

            </form>

        </div>
    </div>

@endsection