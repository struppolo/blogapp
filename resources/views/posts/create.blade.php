@extends('layouts.template')

@section('content')
<form method="post" action="{{ route('posts.store') }}">
@csrf
Titolo<br>
<input type="text" name="titolo" class="form-control" />
Testo<br>
<textarea name="testo" class="form-control"></textarea>
<br />
<input type="submit" value="Salva Post" class="btn btn-primary" />
</form>
@endsection