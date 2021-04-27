@extends('layouts.template')


@section('content')
<h2>Ciao {{  Auth::user()->name }} ({{  Auth::user()->roles->first()->name }}), questi sono i tuoi post:</h2>
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Titolo</th>

        <th colspan="2">Azioni</th>
    </tr>

@foreach ($posts as $post)
<tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->titolo }}</td>

    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
    <td>
        <form method="post" action="{{ route('posts.destroy',$post->id) }}">
        @method('DELETE')
        @csrf
        <button type="submit" value="Elimina" class="btn btn-primary"><i class="fas fa-trash"></i>
        </button>
        </form>



    </td>
</tr>
@endforeach

</table>
{{ $posts->links() }}
@endsection
