@extends('layouts.template')

@section('content')
<h2>Stai inserendo un commento al post con id {{ $id }}</h2>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="{{ route('comments.store',$id) }}" enctype="multipart/form-data">
@csrf

Testo<br>
<textarea name="testo" class="form-control"  rows="10" id="mytextarea"></textarea>

<br />
<input type="submit" value="Salva Commento" class="btn btn-primary" />
</form>
@endsection