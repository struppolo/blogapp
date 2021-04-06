@extends('layouts.template')

@section('content')


<h1>{{ $post->titolo}}</h1>

@if(is_file(public_path('images') . "/" . $post->id . '.jpg'))
<img src="{{ asset('images/' . $post->id . '.jpg') }}" style="max-width: 100%">
@endif
<p>{{ $post->testo }}</p>
@endsection