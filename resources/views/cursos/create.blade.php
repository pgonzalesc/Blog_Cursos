
@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
    <h1>Vamos a crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label>
            Nombre<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción<br>
            <textarea name="description" rows="4">{{old('description')}}</textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoría<br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection