@extends('layouts.template')


@section('content')
<form method="post" action="{{ route('postsearch') }}">
@csrf
Cerca nei post:
<input type="text" name="testo" class="form-control" value="@if(isset($testo)) {{ $testo }} @endif"/><br />
<input type="submit" class="btn btn-primary" /> 
    

</form>
@if(isset($posts))
<h1> Risultati della ricerca ({{ $posts->count() }}) </h1>
@if($posts->count()>0)
@foreach($posts as $post)

<div class="card my-4">
    <div class="card-header">
        <a href="{{ route('posts.show',$post->id) }}">{{ $post->titolo}}</a>
    </div>
    <div class="card-body">

        
        {!! $post->testo !!}
        <br />

Inserito il {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
alle {{ \Carbon\Carbon::parse($post->created_at)->format('H:i') }}
da {{ $post->name }}


    </div>
  
  </div>




@endforeach
@else
<h3>La tua ricerca non ha avuto risultati</h3>
@endif
@endif
@endsection