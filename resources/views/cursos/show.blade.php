
@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')
    <h1>Bienvenido a {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a Curso</a>
    <p><strong>Categoría: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>
@endsection