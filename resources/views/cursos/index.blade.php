
@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
    <h1>Bienvenido al inicio del Curso</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}
@endsection