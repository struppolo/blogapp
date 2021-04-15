@extends('layouts.template')

@section('content')


<h1>{{ $post->titolo}}</h1>

@foreach (  $post->images as $image )
@if(is_file(public_path('images') . "/" . $image->nome))
<img src="{{ asset('images/' . $image->nome) }}" class="img-thumbnail float-left">
@endif

@endforeach
{!! $post->testo !!}
@endsection
