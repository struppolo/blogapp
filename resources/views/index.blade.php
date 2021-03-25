@extends('layouts.template')


@section('content')
<h1>Blog App @auth -- Ciao {{  Auth::user()->name }} @endauth</h1>

@endsection