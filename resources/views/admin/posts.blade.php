@extends('adminlte::page')

@section('title', 'Tutti i post')

@section('content_header')
    <h1>Tutti i post</h1>
@stop

@section('content')

<table class="table table-striped table-bordered datatable">
    <thead>
<tr>
    <th>Titolo</th>
    <th>Inserito il</th>
    <th>Azioni</th>
</tr>
    </thead>
    <tbody>
@foreach ($posts as $post)
<tr>

<td>{{ $post->titolo }}</td>
<td></td>
<td></td>
</tr>


@endforeach
    </tbody>
</table>
@stop

@section('js')
<script>
$(document).ready( function () {
    $('.datatable').DataTable();
} );
</script>
@stop
