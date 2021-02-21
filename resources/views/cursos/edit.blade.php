
@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <h1>Vamos a editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre<br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripción<br>
            <textarea name="description" rows="4">{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoría<br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection