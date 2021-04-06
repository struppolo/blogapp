@extends('layouts.template')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
@csrf
Immagine<br>
<input type="file" name="immagine" class="form-control" />
Titolo<br>
<input type="text" name="titolo" class="form-control" />
Testo<br>
<textarea name="testo" class="form-control"  rows="10"></textarea>
<div id="summernote"></div>
<br />
<input type="submit" value="Salva Post" class="btn btn-primary" />
</form>
@endsection