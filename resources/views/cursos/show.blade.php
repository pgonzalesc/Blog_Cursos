
@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')
    <h1>Bienvenido a {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a Curso</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Categoría: </strong>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection