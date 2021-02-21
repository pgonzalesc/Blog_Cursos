
@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
    <h1>Vamos a crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción<br>
            <textarea name="description" rows="4"></textarea>
        </label>
        <br>
        <label>
            Categoría<br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection