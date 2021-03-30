@extends('layouts.template')

@section('content')
<form method="post" action="{{ route('posts.update',$post->id) }}">
@method('PUT')
@csrf
Titolo<br>
<input type="text" name="titolo" class="form-control" value="{{ $post->titolo }}"/>
Testo<br>
<textarea name="testo" class="form-control">{{ $post->testo }}</textarea>
<br />
<input type="submit" value="Salva Post" class="btn btn-primary" />
</form>
@endsection