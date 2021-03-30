@extends('layouts.template')

@section('content')
Titolo: {{ $post->titolo}}<br>
Testo: {{ $post->testo }}
@endsection