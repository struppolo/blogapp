@extends('layouts.template')

@section('content')
<h2>Ciao {{  Auth::user()->name }}, questi sono i tuoi post:</h2>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Titolo</th>
       
        <th colspan="2">Azioni</th>
    </tr>

@foreach ($posts as $post)
<tr>
    <td>{{ $post->id }}</td>
    <td><a href="{{ route('posts.show',$post->id) }}"> {{ $post->titolo }}</a></td>
    
    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Modifica</a></td>
    <td>
        <form method="post" action="{{ route('posts.destroy',$post->id) }}">
        @method('DELETE')
        @csrf
        <input type="submit" value="Elimina" class="btn btn-primary">
        </form>
    
    
    
    </td>
</tr>
@endforeach

</table>

@endsection