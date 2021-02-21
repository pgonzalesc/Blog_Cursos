
@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
    <h1>Vamos a editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre<br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción<br>
            <textarea name="description" rows="4">{{old('description', $curso->description)}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoría<br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection