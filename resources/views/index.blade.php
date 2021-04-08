@extends('layouts.template')


@section('content')
<h2>Gli ultimi post inseriti</h2>
@foreach($posts as $post)
<div class="card">
    <div class="card-header">
        {{ $post->titolo}}
    </div>
    <div class="card-body">
        @if(is_file(public_path('images') . "/" . $post->id . '.jpg'))
        <img src="{{ asset('images/' . $post->id . '.jpg') }}" class="img-thumbnail float-left" style="margin-right:10px;width:200px">
        @endif
        {!! $post->testo !!}
        <a href="/posts/{{ $post->id }}/comments/create">Inserisci un commento</a>
    </div>
    <div class="card-footer text-muted">
   
Inserito il {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} 
alle {{ \Carbon\Carbon::parse($post->created_at)->format('H:i') }} 
da {{ $post->user->name }}
    </div>
  </div>
<h1></h1>



@endforeach

@endsection